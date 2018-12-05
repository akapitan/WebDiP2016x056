<?php
include 'smarty.php';
include 'baza.class.php';
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
if($_SESSION['uloga']>2){
    header("Location: index_signed.php");
    exit();
}


    
$smarty = new Smarty();
$baza = new Baza();


$greska = "";
$target_dir = "uploads/";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $greska = "";
    $provjera = true;
    
    
    $kupon_id = $_POST["kategorija"];
    $datum = $_POST["datum_od"];
    $datum2 = $_POST["datum_do"];
    $cijena = $_POST["cijena"];
    
    if($cijena <= 0){
        $provjera = FALSE;
        $greska = "morate unjeti cijenu";
    }
     if($datum > $datum2){
        $greska .= "<br>Datum_od mora biti veći od datum_do! ";
        $provjera = FALSE;
    }
    
    $upit = "update kuponi set cijena ='$cijena',datum_od ='$datum',datum_do='$datum2'  where kupon_id='$kupon_id' ";
    $skripta =" Uspješno definiran kupon.  " ; 
    $baza->unosDnevnik($skripta);
    $greska = "Uspješno definiran kupon."; 
    $baza->updateDB($upit);
    
    
}
$rezultat = $baza->selectDB("SELECT * FROM `kuponi` ");
foreach ($rezultat as  $value){
    $data[$value["kupon_id"]]=$value["naziv"];
    }
      


SmartyDirektoriji($smarty);
SmartyVarijable($smarty);


$smarty->assign("title","Definiraj Kupon");
$smarty->assign("opcije",$data);
$smarty->assign("prva",1);
$smarty->assign("prikazi","block");
$smarty->assign('greska', $greska);

$smarty->display("_header.tpl");
$uloga = $_SESSION['uloga'];
$smarty->display("_header.tpl");
if($uloga == 1){
    $smarty->display('navigacija_admin.tpl');
}elseif ($uloga == 2){
    $smarty->display('navigacija_moderator.tpl');
}
$smarty->display("moderatorDefinirajKupon.tpl");

    
ob_end_flush();
