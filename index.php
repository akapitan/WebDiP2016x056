<?php
include 'smarty.php';
include 'baza.class.php';

ob_start();
session_start();
/*if(!isset($_SESSION['email'])){
	header("Location: prijava.php");
	exit();
}*/
//echo $_SESSION['tipKorisnika'];
if(isset($_SESSION['id_korisnik'])){
    header("Location: index_signed.php");
}
$smarty = new Smarty();
$baza = new Baza();
    
$rezultat = $baza->selectDB('SELECT naziv, opis, slika FROM kategorija LIMIT 3');

SmartyDirektoriji($smarty);
SmartyVarijable($smarty);
$bodovi = 0;    
$smarty->assign("title" , "Početna");
$smarty->assign("prikazi", "hidden");
$smarty->assign("korisnik" , "");
$smarty->assign("uloga" , "");
$smarty->assign("bodovi" , $bodovi);
$smarty->display('_header_unsigned.tpl');
$smarty->display('navigacija.tpl');
$smarty->display('index.tpl');
    
    
foreach ($rezultat as $value ){
    $title=$value["naziv"];
    $desc=$value["opis"];
    $url = $value["slika"];
    
    $smarty->assign("naslov","$title");
    $smarty->assign("opis","$desc");
    $smarty->assign("url","$url");
    $smarty->assign("disable", "");
    $smarty->display("letci.tpl");
}

    
    
    
ob_end_flush();
?>