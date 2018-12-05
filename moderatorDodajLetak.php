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
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
    
    $provjera = TRUE;
    
    $naziv = $_POST['naziv'];
    $opis = $_POST['opis'];
    if($naziv =="" || $opis == ""){
        $greska = "Morate unesti naziv i opis! ";
        $provjera = FALSE;
    }
    $kategorija = $_POST['kategorija'];
    $velicina = $_POST['velicina'];
    if (isset($_POST['datum_od'])){
        $datum_od = $_POST['datum_od'];
    }
    if (isset($_POST['datum_od'])){
        $datum_do =  $_POST['datum_do'];
    }
    
   
    if($datum_od > $datum_do){
        $greska .= "<br>Datum_od mora biti veći od datum_do! ";
        $provjera = FALSE;
    }
    
    if (!(empty( $_FILES["fileToUpload"]["tmp_name"] )) ){
        if (isset( $_FILES["fileToUpload"] ) && !empty( $_FILES["fileToUpload"]["tmp_name"] )){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $greska .=  "Slika je tip slika.";
            $provjera = TRUE;
        } else {
            $greska .=  "Slika nije tip slika.";
            $provjera = FALSE;
        }
    }
        if (file_exists($target_file)  && !empty( $_FILES["fileToUpload"]["tmp_name"] )) {
        $greska .=  "Slika s tim imenom već postoji.";
        $provjera = FALSE;
    }
    
    if ($provjera == FALSE) {
        $greska .=  "<br>Morate postaviti video, sliku ili pdf u dokument.";
    
    } else {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
            
            $slikaUpit = $target_file;
            $greska .= "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        }else{
            
            $slikaUpit = "NULL";
        }
        $upit = "INSERT into letci values ('default', '$velicina', '$kategorija', '$naziv', '$opis', '$slikaUpit', '$datum_od', '$datum_do' )"; 
        
        if ($baza->updateDB($upit)) {
            
            
            $skripta =" Kreiran novi letak  " ; 
            $baza->unosDnevnik($skripta);
            $greska = "Uspješno kreiran kupon !"; 
        }
        else {
            $greska = "Nespješno kreiran kupon !"; 
        }
    }
        
    }
    else{
        $greska .= "Morate unesti sliku, pdf ili video!.";
    }
    
    
    /*
    $upit = "INSERT into velicina values ('default', '{$naziv}' , '{$opis}')";
    $greska = $upit;
    
    if ($baza->updateDB($upit)) {
        $skripta =" admin - Dodana nova veličina" ; 
        $baza->unosDnevnik($skripta);
                 
    }
    else{
        $skripta =" admin - Greska kod dodavanja velicine" ; 
        $baza->unosDnevnik($skripta); 
    }*/
    
}
$korisnik_id = $_SESSION['id_korisnik'];

$rezultat = $baza->selectDB("SELECT k.`kategorija_id`, k.`naziv`,  m.moderator FROM `kategorija` k, moderatorkategorija m WHERE k.kategorija_id = m.kategorija AND m.moderator ='$korisnik_id' ");
foreach ($rezultat as  $value){
    $data[$value["kategorija_id"]]=$value["naziv"];
    }
if(empty($data)){
    $data = "";
}
$rezultat2 = $baza->selectDB("SELECT `velicina_id`, `naziv` FROM `velicina` ");      
foreach ($rezultat2 as  $value){
    $data2[$value["velicina_id"]]=$value["naziv"];
    }

SmartyDirektoriji($smarty);
SmartyVarijable($smarty);


$smarty->assign("title","Dodaj novi letak");
$smarty->assign("opcije",$data);
$smarty->assign("opcije2",$data2);
$smarty->assign("prva",1);
$smarty->assign("prikazi","block");
$smarty->assign('greska', $greska);

$uloga = $_SESSION['uloga'];
$smarty->display("_header.tpl");
if($uloga == 1){
    $smarty->display('navigacija_admin.tpl');
}elseif ($uloga == 2){
    $smarty->display('navigacija_moderator.tpl');
}
$smarty->display("moderatorDodajLetak.tpl");

    
ob_end_flush();
