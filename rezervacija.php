<?php
include 'smarty.php';
include 'baza.class.php';
include 'virtualnoVrijeme.php';
ob_start();
session_start();

    
$smarty = new Smarty();
$baza = new Baza();
SmartyDirektoriji($smarty);
SmartyVarijable($smarty);

$id = $_GET["id"];

$rezultat = $baza->selectDB("SELECT * From letci where letak_id = '$id';" );

$greska = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $kolicina = $_POST['kolicina'];
    $opis = $_POST['opis'];
    $korisnikID = $_SESSION['id_korisnik'];
    $vrijeme = vrijemeV();
    $vrijemeF = date('Y-m-d H:i:s', $vrijeme);
    
    $upit = "INSERT INTO `naruceni` (`narudzba_id`, `letak`, `korisnik`, `opis`, `datum_od`,`status`, `kolicina`) VALUES (DEFAULT, '$id', '$korisnikID', '$opis', '$vrijemeF', '1', '$kolicina')";

    
    
    if ($baza->updateDB($upit)) {
        $skripta =" Kreirana narudzba letka " ; 
        $baza->unosDnevnik($skripta);
        $greska = "Uspješno kreirana narudžba!";   
        $skripta =" Korisnik je uspješno kreirao narudzbu" ; 
        $baza->unosDnevnik($skripta);
        $baza->unosBodovi('8', '15');  
        
        
    }
    else {
        $greska = "Narudžba nije kreirana!"; 
        $skripta =" Korisnik je neuspjesno kreirao narudzbu. " ; 
        $baza->unosDnevnik($skripta);
    }
    
}


include './css/css2.txt';


$smarty->assign("title","Naruči letak");
$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-A-icon.png");
$smarty->assign("korisnik" , "ja");
$smarty->assign("prikazi","block");
$smarty->assign('greska', $greska);

$smarty->display("_header.tpl");

//$smarty->display("navigacija_korisnik.tpl");
$smarty->display("index.tpl");


foreach ($rezultat as $value ){
    $title=$value["naziv"];
    $desc=$value["opis"];
    $url = $value["slika"];
    
    $smarty->assign("naslov","$title");
    $smarty->assign("opis","$desc");
    $smarty->assign("url","$url");
    $smarty->assign("disable", "");
    $smarty->display("letci2.tpl");
}
$smarty->display("narudzbaLetak.tpl");

ob_end_flush();
