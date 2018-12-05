<?php
include 'smarty.php';
include 'baza.class.php';
include 'istekSesije.php';

ob_start();
session_start();

if(isset($_SESSION['vrijemePostavljen'])){
    $i = istekSesije($_SESSION['vrijemePostavljen']);   
    
}

if(!isset($_SESSION['email'])){
	header("Location: prijava.php");
	exit();
}
//echo $_SESSION['tipKorisnika'];
    
$smarty = new Smarty();
$baza = new Baza();
    
SmartyDirektoriji($smarty);
SmartyVarijable($smarty);
$greska = "";     
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $podljeljenoJos = $_POST['kod'];
    $id = $_POST['id'];
       
    $rezultat = $baza->selectDB("SELECT `kolicina`,`podjeljenji` FROM `naruceni` WHERE `narudzba_id`=$id");
    if ($rezultat->num_rows == 1) {
        $podaci = mysqli_fetch_array($rezultat);
        $kolicina = $podaci["kolicina"];
        $podjeljeni = $podaci["podjeljenji"];
        if(($podjeljeni+$podljeljenoJos) > $kolicina){
            $greska ="Ne možete podjeliti više letaka nego što imate! ";
            $skripta =" Korisnik je unio previse lezaka za podjeliti " ; 
            $baza->unosDnevnik($skripta);
        }
        else {
            $novaKolicina = $kolicina - ($podljeljenoJos + $podjeljeni);
            $novoPodjeljeno = $podljeljenoJos + $podjeljeni;
            $novoSlobodno = $novaKolicina - $novoPodjeljeno;
            $upit = "update naruceni set kolicina = ".$novaKolicina .",podjeljenji=".$novoPodjeljeno ." where narudzba_id='" . $id . "' ";
            $baza->updateDB($upit);
            $skripta =" Korisnik je uzeo letke za podjeliti. " ; 
            $baza->unosDnevnik($skripta);
            $baza->unosBodovi('7', '12');  
            
        }
    }
        
        
}
    
$idKorisnik = $_SESSION['id_korisnik'];    

$upit = "SELECT letci.naziv AS naziv, letci.opis,naruceni.slika, korisnik.korisnik_id,naruceni.narudzba_id AS id,"
        . "naruceni.datum_od AS datum, naruceni.kolicina as kolicina, naruceni.opis, naruceni.status, naruceni.podjeljenji, naruceni.slobodno "
        . "FROM `naruceni`, `letci`,`korisnik` WHERE naruceni.letak=letci.letak_id AND naruceni.korisnik = korisnik.korisnik_id AND "
        . "korisnik.korisnik_id ='$idKorisnik' AND naruceni.status = 1 ";

$upitCijelaStranica = $upit;  
    
$upitKolikoPoStranici = 'SELECT * FROM `postavketrajanja` WHERE id = 3';
$brojElemenataPoStraniciArray = $baza->selectDB($upitKolikoPoStranici);
$brojElemenata = $brojElemenataPoStraniciArray->fetch_array();
$brojElemenataFinal = $brojElemenata['vrijednost'];

if(isset($_GET['stranica']) && $_GET['tip'] == 'naruceni'){
    $limit = (($_GET['stranica'] -1) * ($brojElemenataFinal));
    
                
    $upit .= " LIMIT $limit, $brojElemenataFinal";
}else{
        $upit .= " LIMIT 0, $brojElemenataFinal";
                
    }

$rezultat = $baza->selectDB($upit);



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
    
$korisnik = $_SESSION['korisnicko_ime'];
$uloga = $_SESSION['uloga'];
$smarty->assign("title" , "Moji letci");
//$smarty->assign("korisnik" , $korisnik);
 /*   
if($uloga == 1){$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-A-icon.png");}
elseif ($uloga == 2) {$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-M-icon.png");}
elseif ($uloga == 3) {$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-U-icon.png");}*/
    
//$smarty->assign("uloga" , $uloga);
//$smarty->assign("prikazi", "visible");
$smarty->display('_header.tpl');
    
if($uloga == 1){
    $smarty->display('navigacija_korisnik.tpl');
}elseif ($uloga == 2){
    $smarty->display('navigacija_korisnik.tpl');
}elseif ($uloga == 3){
    $smarty->display('navigacija_korisnik.tpl');
}
    
$smarty->display('index.tpl');
    
$nazivKategorije2 = "";
echo "<h2 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%;'>Naručeni</h2>"."<div style='float: left; width: 82%; '>";
foreach ($rezultat as $value ){
    
    
    
    $title=$value["naziv"];
    $desc=$value["opis"];
    $url = $value["slika"];
    $id = $value["id"];
    $kolicina = $value["kolicina"];
    $datum = $value["datum"];
        
        
        
        
    $smarty->assign("kolicina", $kolicina);  
    $smarty->assign("datum", $datum); 
    $smarty->assign("naslov","$title");
    $smarty->assign("opis","$desc");
    $smarty->assign("url","");
    $smarty->assign("id","$id");
    $smarty->assign("disable", "");
    $smarty->display("pregledNarudzbe.tpl");
}

 $smarty->assign("stranice",$listaStranica);   
 $smarty->assign("letci", "letci.php")  ; 
 $smarty->assign("tip", "naruceni")  ; 
 
 echo "</div><h5 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%; visibility:hidden;'>Izrađeni</h5>"."<div style='float: left; max-width: none; '>";
 $smarty->display("letciFooter.tpl");
    
echo "</div><h2 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%;'>Izrađeni</h2>"."<div style='float: left; max-width: none; '>";
$upit2 = "SELECT letci.naziv AS naziv, letci.opis,naruceni.slika, korisnik.korisnik_id,naruceni.narudzba_id AS id,naruceni.datum_od AS datum,"
        . " naruceni.kolicina as kolicina, naruceni.opis, naruceni.status, naruceni.podjeljenji AS podjeljeni, naruceni.slobodno, naruceni.datum_do as datum_do "
        . "FROM `naruceni`, `letci`,`korisnik` WHERE naruceni.letak=letci.letak_id AND naruceni.korisnik = korisnik.korisnik_id AND korisnik.korisnik_id ='$idKorisnik' "
        . "AND naruceni.status = 2";
$upit2Kopija = $upit2;

$tabliceSadrzajSve = $baza->selectDB($upit2Kopija);
while($row = mysqli_fetch_assoc($tabliceSadrzajSve)){
    $dataTablice2[] = $row;
    }
    $brojRedaka = mysqli_num_rows($tabliceSadrzajSve);
    $stranica = ceil($brojRedaka/$brojElemenataFinal);
    $listaStranica = array();
    for ($i=1; $i <= $stranica;$i++){
        $listaStranica[] = $i;
    }



if(isset($_GET['stranica']) && $_GET['tip']=='izradjeni'){
    $limit = (($_GET['stranica'] -1) * ($brojElemenataFinal));
    
                
    $upit2 .= " LIMIT $limit, $brojElemenataFinal";
}else{
        $upit2 .= " LIMIT 0, $brojElemenataFinal";
                
    }
//echo '<pre>'; print_r($listaStranica); echo '</pre>';    
$rezultat2 = $baza->selectDB($upit2);
    
foreach ($rezultat2 as $value ){
    
    
    
    $title=$value["naziv"];
    $desc=$value["opis"];
    $url = $value["slika"];
    $id = $value["id"];
    $kolicina = $value["kolicina"];
    $datum = $value["datum"];
    $datum_do = $value["datum_do"];
    $podjeljeni = $value["podjeljeni"];
    
    $smarty->assign('greska', $greska);
    $smarty->assign("podjeljeni", $podjeljeni); 
    $smarty->assign("datum_do", $datum_do); 
    $smarty->assign("kolicina", $kolicina);  
    $smarty->assign("datum", $datum); 
    $smarty->assign("naslov","$title");
    $smarty->assign("opis","$desc");
    $smarty->assign("url","$url");
    $smarty->assign("id","$id");
    //$smarty->assign("disable", "");
    $smarty->display("pregledNarudzbe2.tpl");
}
    
 $smarty->assign("stranice",$listaStranica);   
 $smarty->assign("letci", "letci.php")  ; 
 $smarty->assign("tip", "izradjeni")  ; 
 
 echo "</div><h5 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%; visibility:hidden;'>Izrađeni</h5>"."<div style='float: left; max-width: none; '>";
 $smarty->display("letciFooter.tpl");
ob_end_flush();
?>