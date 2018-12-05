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
    $greska = "";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
    $target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
    
    $provjera = TRUE;
    
    $naziv = $_POST['naziv'];
    $opis = $_POST['opis'];
    if($naziv =="" || $opis == ""){
        $greska = "Morate unesti naziv i opis! ";
        $provjera = FALSE;
    }
    $kategorija = $_POST['kategorija'];
    if (isset($_POST['datum_od'])){
        $datum_od = $_POST['datum_od'];
    }
    if (isset($_POST['datum_od'])){
        $datum_do =  $_POST['datum_do'];
    }
    
   
    if($datum_od > $datum_do){
        $greska .= "<br>Datum od mora biti veći od datum do! ";
        $provjera = FALSE;
    }
    
    if (!(empty( $_FILES["fileToUpload"]["tmp_name"] )) || !(empty( $_FILES["fileToUpload2"]["tmp_name"]) )|| !(empty( $_FILES["fileToUpload"]["tmp_name"] ))){
        if (isset( $_FILES["fileToUpload"] ) && !empty( $_FILES["fileToUpload"]["tmp_name"] )){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            
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
    if (file_exists($target_file2) && !empty( $_FILES["fileToUpload2"]["tmp_name"] )) {
        $greska .=  "<br>pdf s tim imenom već postoji.";
        $provjera = FALSE;
    }
    if (file_exists($target_file3) && !empty( $_FILES["fileToUpload3"]["tmp_name"] )) {
        $greska .=  "<br>video s tim imenom već postoji.";
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
        if(move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)){
            $greska .= "<br>The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
            $pdfUpit = $target_file2;
        }else{
            
            $pdfUpit = "NULL";
        }
        if(move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)){
            $greska .= "<br>The file ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded.";
            $videoUpit = $target_file3;
        }else{
            
            $videoUpit = "NULL";
        }
        $upit = "INSERT into kuponi values ('default', '$naziv' , '$opis', '$slikaUpit', '$videoUpit', '$pdfUpit', 'NULL', '$datum_od', '$datum_do' )"; 
        if ($baza->updateDB($upit)) {
            $nesto ="SELECT `kupon_id` FROM `kuponi` WHERE naziv = '$naziv' AND (slika = '$slikaUpit' OR video = '$videoUpit' OR pdf = '$pdfUpit')";
            echo $nesto;
            $rezultat = $baza->selectDB("SELECT `kupon_id` FROM `kuponi` WHERE naziv = '$naziv' AND (slika = '$slikaUpit' OR video = '$videoUpit' OR pdf = '$pdfUpit')");
            $podaci = mysqli_fetch_array($rezultat);
            $id = $podaci["kupon_id"];
            
            $upit = "INSERT into kategorija_kupona values ('$id', '$kategorija')";
            $baza->updateDB($upit);
            echo '<br>' .$upit; 
            $skripta =" Kreiran novi kupon  " ; 
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
$rezultat = $baza->selectDB("SELECT `kategorija_id`, `naziv` FROM `kategorija` ");
foreach ($rezultat as  $value){
    $data[$value["kategorija_id"]]=$value["naziv"];
    }
      


SmartyDirektoriji($smarty);
SmartyVarijable($smarty);


$smarty->assign("title","Kreiraj kupon");
$smarty->assign("opcije",$data);
$smarty->assign("prva",1);
$smarty->assign("prikazi","block");
$smarty->assign('greska', $greska);

$smarty->display("_header.tpl");
$smarty->display("navigacija_admin.tpl");
$smarty->display("adminKreirajKupon.tpl");

    
ob_end_flush();
