<?php
include 'smarty.php';
include 'baza.class.php';
include 'virtualnoVrijeme.php';
include 'istekSesije.php';

ob_start();
session_start();
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
    
$smarty = new Smarty();
$baza = new Baza();


$greska = "";



SmartyDirektoriji($smarty);
SmartyVarijable($smarty);
//$vrijeme = time();
/*$upit = "SELECT pomak FROM Pomak WHERE id = '1';";
$rezultat = $baza->selectDB($upit);
$red = $rezultat->fetch_array();
$vritualnoVrijeme = $vrijeme + ($red[0] * 60 * 60);
$vrijemeS = date('d.m.Y H:i', $vrijeme);
$vritualnoVrijemeS = date('d.m.Y H:i', $vritualnoVrijeme);*/
$vrijeme = time();
$vrijemeS = date('d.m.Y H:i', $vrijeme);
$vritualnoVrijeme = vrijemeV();
$vritualnoVrijemeS = date('d.m.Y H:i', $vritualnoVrijeme);

$smarty->assign("title","Virtualno Vrijeme");

$smarty->assign("vrijemeTrenutno",$vrijemeS);
$smarty->assign("vrijemeVirtualno",$vritualnoVrijemeS);
$smarty->assign("prikazi","block");
$smarty->assign('greska', $greska);

$smarty->display("_header.tpl");
$smarty->display("navigacija_admin.tpl");
$smarty->display("adminVirtualnoVrijeme.tpl");

    
ob_end_flush();
