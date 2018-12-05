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
if($_SESSION['uloga']>1){
    header("Location: index_signed.php");
    exit();
}
   
    
$smarty = new Smarty();
$baza = new Baza();


$greska = "";
$target_dir = "uploads/";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['moderatorKategorija'])) {
        $kategorija = $_POST["kategorija"];
        $moderator = $_POST["moderator"];
            
        $upit = "INSERT INTO moderatorkategorija VALUES('$moderator', '$kategorija')";
        if($baza->updateDB($upit)){
            $greska = "Uspješno dodan moderator nad kategoriom.";
            $skripta =" Uspješno dodan moderator nad kategoriom. " ; 
            $baza->unosDnevnik($skripta);

        }else{
            $greska = "Odabrani korisnik je već moderator u kategoriji.";
            $skripta =" Nespješno dodan moderator nad kategoriom. " ; 
            $baza->unosDnevnik($skripta);
        }
    } else {
        //assume btnSubmit
    }
        
        
        
}
$korisnik_id = $_SESSION['id_korisnik'];

$rezultat = $baza->selectDB("SELECT korisnik_id, ime FROM korisnik where uloga = 2");
foreach ($rezultat as  $value){
    $data[$value["korisnik_id"]]=$value["ime"];
    }
if(empty($data)){
    $data = "";
}

$rezultat2 = $baza->selectDB("SELECT `kategorija_id`, `naziv` FROM `kategorija` ");    

foreach ($rezultat2 as  $value){
    $data2[$value["kategorija_id"]]=$value["naziv"];
    }

SmartyDirektoriji($smarty);
SmartyVarijable($smarty);


$smarty->assign("title","Dodaj moderatora");
$smarty->assign("opcije",$data);
$smarty->assign("opcije2",$data2);
$smarty->assign("prva",1);
$smarty->assign("prikazi","block");
$smarty->assign('greska', $greska);

$smarty->display("_header.tpl");
$smarty->display("navigacija_admin.tpl");
$smarty->display("adminDodajModeratora.tpl");

  


ob_end_flush();
