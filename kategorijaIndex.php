<?php

include 'smarty.php';
include 'baza.class.php';

$smarty = new Smarty();
$baza = new Baza();
SmartyDirektoriji($smarty);
SmartyVarijable($smarty);


$kate = $_GET["kate"];


$rezultat = $baza->selectDB("SELECT letci.naziv, letci.opis, letci.slika FROM `kategorija` , letci  WHERE kategorija.kategorija_id=letci.kategorija AND kategorija.naziv='$kate' LIMIT 3" );

$smarty->assign("title","Top 3 usluge");
$smarty->assign("prikazi", "hidden");
$smarty->assign("korisnik" , "");
$smarty->assign("uloga" , "");
$smarty->assign("bodovi" , "");
$smarty->display('_header.tpl');

//$smarty->display('navigacija.tpl');
$smarty->display('index.tpl');

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

include 'css/css2.txt';