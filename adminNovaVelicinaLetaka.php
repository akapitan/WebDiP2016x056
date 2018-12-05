<?php
include 'smarty.php';
include 'baza.class.php';
include 'istekSesije.php';

ob_start();
session_start();

    
$smarty = new Smarty();
$baza = new Baza();

if(isset($_SESSION['vrijemePostavljen'])){
    $i = istekSesije($_SESSION['vrijemePostavljen']);   
    
}

if(!isset($_SESSION['email'])){
	header("Location: prijava.php");
	exit();
}


if($_SESSION['uloga']>1){
    header("Location: index_signed.php");
    exit();
}

$greska = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $naziv = $_POST['naziv'];
    $opis = $_POST['opis'];
    
    $upit = "INSERT into velicina values ('default', '{$naziv}' , '{$opis}')";
    //$greska = $upit;
    
    if ($baza->updateDB($upit)) {
        $skripta =" admin - Dodana nova veličina" ; 
        $baza->unosDnevnik($skripta);
                 
    }
    else{
        $skripta =" admin - Greska kod dodavanja velicine" ; 
        $baza->unosDnevnik($skripta); 
    }
    
    
}
SmartyDirektoriji($smarty);
SmartyVarijable($smarty);


$smarty->assign("title","Kreiranje veličine letaka");

$smarty->assign("prikazi","block");
$smarty->assign('greska', $greska);

$smarty->display("_header.tpl");
$smarty->display("navigacija_admin.tpl");
$smarty->display("index.tpl");
$smarty->display("adminNovaVelicinaLetaka.tpl");

    
ob_end_flush();
