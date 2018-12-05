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

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $id = $_POST["id"];
     $_GET["id"] = $id;
     
 }   
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
          $id = $_GET["id"];
          $upit = "DELETE FROM dnevnik WHERE id = '$id'";
          
         if ($baza->updateDB($upit)) {
            $skripta =" Admin - Izbrisan sadrzaj iz dnevnika. " ; 
            $baza->unosDnevnik($skripta);
            header("Location: adminDnevnik.php");
            
            }
        else{
            $skripta =" Admin - Neuspjelo brisanje iz dnevnika" ; 
            $baza->unosDnevnik($skripta); 
            } 
        
       } 
 } 
 
 
SmartyDirektoriji($smarty);
SmartyVarijable($smarty);
    
$korisnik = $_SESSION['korisnicko_ime'];
$uloga = $_SESSION['uloga'];
$smarty->assign("title" , "Otključivanje korisnika");
$smarty->assign("korisnik" , $korisnik);
    
if($uloga == 1){$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-A-icon.png");}
    
    
//$smarty->assign("uloga" , $uloga);
$smarty->assign("prikazi", "visible");
$smarty->display('_header.tpl');
    
    
$smarty->display('navigacija_admin.tpl');
$smarty->display('index.tpl');
    
$upit = "SELECT  * FROM dnevnik";
$string ="select * from akcija where LOWER(CONCAT(akcija.akcija_id, ' ', akcija.opis, ' ', akcija.vrijednost)) LIKE LOWER('%Podjela%')";
if(isset($_GET["pretrazi"])){
    $pretrazivanje = $_GET["pretrazi"];
    $upit .= " WHERE LOWER(CONCAT(id, ' ', skripta, ' ', korisnik, ' ', datum)) LIKE LOWER('%$pretrazivanje%')";
}   
    
if(isset($_GET['sort'])){
    if ($_GET['sort'] == 'id')
    {
        $upit .= " ORDER BY id";
            
    }
    elseif ($_GET['sort'] == 'skripta')
    {
        $upit .= " ORDER BY skripta";
    }
    elseif ($_GET['sort'] == 'datum')
    {
        $upit .= " ORDER BY datum";
    }
    elseif ($_GET['sort'] == 'korisnik')
    {
        $upit .= " ORDER BY korisnik";
    }
}
$upitCijelaStranica = $upit;  

$upitKolikoPoStranici = 'SELECT * FROM `postavketrajanja` WHERE id = 1';
$brojElemenataPoStraniciArray = $baza->selectDB($upitKolikoPoStranici);
$brojElemenata = $brojElemenataPoStraniciArray->fetch_array();
$brojElemenataFinal = $brojElemenata['vrijednost'];

if(isset($_GET['stranica'])){
    $limit = (($_GET['stranica'] -1) * ($brojElemenataFinal));
    
                
    $upit .= " LIMIT $limit, $brojElemenataFinal";
    }else{
        $upit .= " LIMIT 0, $brojElemenataFinal";
                
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

$rezultat = $baza->selectDB($upit);
while($row = mysqli_fetch_assoc($rezultat)){
  $data[] = $row;
}
if(!(isset($data))){
    $data = array();
}

$smarty->assign("stranice",$listaStranica);    
$smarty->assign("data", $data);
$smarty->display('adminDnevnik.tpl');
    
ob_end_flush();
?>