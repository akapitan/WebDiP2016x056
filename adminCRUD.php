<?php
header('Content-Type: text/html; charset=utf-8');
include 'smarty.php';
include 'baza.class.php';
include 'istekSesije.php';

ob_start();
session_start();
$baza = new Baza();
$smarty = new Smarty();
$greska = "";
$ispis = "";
//$listaKorisnika = "";

if(isset($_SESSION['vrijemePostavljen'])){
    $i = istekSesije($_SESSION['vrijemePostavljen']);   
    
}

if(!isset($_SESSION['korisnicko_ime'])){
    header("Location: prijava.php");
    exit();
}
if($_SESSION['uloga']>1){
    header("Location: index_signed.php");
    exit();
}
    
 if(isset($_GET["action"]))  
 {  //SHOW COLUMNS FROM korisnik ;
     
     
    $tablica = $_GET["tablica"]; 
    $id = $_GET["id"];
    $upit = "SHOW COLUMNS FROM $tablica";
    $rezultat = $baza->selectDB($upit);
    $podaci = mysqli_fetch_array($rezultat);           
        
    $upit = "DELETE FROM $tablica WHERE $podaci[0] ='$id'";
    $baza->updateDB($upit);
        
        
        
        
 }
     
     
//SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' and TABLE_SCHEMA='WebDiP2016x056
//$upitTablica = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' and TABLE_SCHEMA='WebDiP2016x056'";
$upitTablica = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' and TABLE_SCHEMA='mydb'";
$tablice = $baza->selectDB($upitTablica);
  
while($row = mysqli_fetch_assoc($tablice)){
    
  $data[] = $row;
      
}

foreach ($data as $num => $value){
    
    $tablica = $value["TABLE_NAME"];

        
    $upit = "SHOW COLUMNS FROM $tablica";
    $rezultat = $baza->selectDB($upit);
    $row = mysqli_fetch_assoc($rezultat);
        
    $pomocniPodaci[] = $row["Field"];
        
            
}
  
     
SmartyDirektoriji($smarty);
SmartyVarijable($smarty);
    
$korisnik = $_SESSION['korisnicko_ime'];
$uloga = $_SESSION['uloga'];
$smarty->assign("title" , "CRUD");
$smarty->assign("korisnik" , $korisnik);
    
if($uloga == 1){$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-A-icon.png");}
    
    
//$smarty->assign("uloga" , $uloga);
$smarty->assign("prikazi", "visible");
$smarty->display('_header_1.tpl');
$smarty->display('navigacija_admin.tpl');    
$smarty->display('index.tpl');
    
$upitKolikoPoStranici = 'SELECT * FROM `postavketrajanja` WHERE id = 1';
$brojElemenataPoStraniciArray = $baza->selectDB($upitKolikoPoStranici);
$brojElemenata = $brojElemenataPoStraniciArray->fetch_array();
$brojElemenataFinal = $brojElemenata['vrijednost'];

    
 
foreach ($data as $index => $cod){
    
    $tablica = $cod['TABLE_NAME'];
    $upit = "SELECT * FROM  $tablica";
    $upitCijelaStranica = $upit;
    
    $upitKoluneTablica = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$tablica'";
    $tabliceKolune = $baza->selectDB($upitKoluneTablica);
    $dataKolune = array();
    while($row = mysqli_fetch_assoc($tabliceKolune)){
        $dataKolune[] = $row['COLUMN_NAME'];
        
      }
    $string = ""; 
    $string = " WHERE LOWER(CONCAT( ";
    foreach($dataKolune as $keys => $value2){
        $string .= " ". $value2 .", ' ' ,";    
    }
    $string .= " ' ' )) LIKE LOWER ('%";
    
    
    if(isset($_GET['tablica']) && $_GET['tablica'] == $tablica){
        //select * from akcija where LOWER(CONCAT(akcija.akcija_id, ' ', akcija.opis, ' ', akcija.vrijednost)) LIKE LOWER('%Podjela%')
        if(isset($_GET['pretrazi'])){
            $pretrazivanje = $_GET['pretrazi'];
            $upit .= $string .$pretrazivanje ."%') ";
        }
        if(isset($_GET['tablicaOD']) && isset($_GET['tablicaDO'])){
            // WHERE dnevnik.datum BETWEEN "2018-12-12" AND "2019-12-12"
            $upit .= " WHERE datum BETWEEN '" .$_GET['tablicaOD'] ."' AND '" .$_GET['tablicaDO'] ."' "; 
            
        }
        if(isset($_GET['sort'])){
                $dodatak = $_GET["sort"];
             $upit .= " ORDER BY $dodatak";
            }
        $upitCijelaStranica = $upit;
        
                 
        if(isset($_GET['stranica'])){
              
            $limit = (($_GET['stranica'] -1) * ($brojElemenataFinal));
            //$upit = $upitSpremljeni[$index];
            
            $upit .= " LIMIT $limit, $brojElemenataFinal";
        }else{
            $upit .= " LIMIT 0, $brojElemenataFinal";
            
        }
    
    
    $smarty->assign("collapse", "panel-collapse collaps");        
    }else{
            $upit .= " LIMIT 0, $brojElemenataFinal";
            $smarty->assign("collapse", "collapse");
        }
    //echo '<pre>'; print_r($upit); echo '</pre>';
    $tabliceSadrzaj = $baza->selectDB($upit);
    while($row = mysqli_fetch_assoc($tabliceSadrzaj)){
        $dataTablice[] = $row;
      }
    if(!(isset($dataTablice))){
        $dataTablice = array();
        }
      
      $tabliceSadrzajSve = $baza->selectDB($upitCijelaStranica);
      while($row = mysqli_fetch_assoc($tabliceSadrzajSve)){
        $dataTablice2[] = $row;
      }
    $brojRedaka = mysqli_num_rows($tabliceSadrzajSve);
    $stranica = ceil($brojRedaka/$brojElemenataFinal);
    $listaStranica = array();
    for ($i=1; $i <= $stranica;$i++){
        $listaStranica[] = $i;
    }
        
    if($tablica == 'dnevnik' || $tablica == 'korisnik' || $tablica =='kuponi' || $tablica == 'letci' || $tablica == 'log_bodovi' || $tablica =='dnevnik'){
        $smarty->assign("displayRaspon", "block");}
    else{$smarty->assign("displayRaspon", "none");}
    
    $smarty->assign("stranice",$listaStranica);
    $smarty->assign("index", $pomocniPodaci[$index]);
    $smarty->assign("tablicaID", "$tablica");
    $smarty->assign("naziv", $tablica);
    $smarty->assign("data",$dataTablice);
    $dataTablice = array();
    $smarty->assign("brojRedaka", $brojRedaka);
        
    $smarty->display('adminCRUD.tpl');
    $smarty->display("adminCrudTablica.tpl");
        
    $smarty->display('adminCRUD_2.tpl');
}
    
    
    
$smarty->display('_footer.tpl');
    
ob_end_flush();
?>