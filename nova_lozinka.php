<?php
include 'smarty.php';
include 'baza.class.php';
ob_start();
session_start();

    
$smarty = new Smarty();
$baza = new Baza();

if(isset($_SESSION['id_korisnik'])){
    header("Location: index_signed.php");
}



$greska = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['naziv'];
    
     
    
    $upit = "SELECT * FROM korisnik WHERE email = '$email'";
    $rezultat = $baza->selectDB($upit);
    if($rezultat->num_rows==1){
        $greska =" Pronađena je email adresa. ";
        $lista = $rezultat->fetch_array();
        $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
        $primatelj = $email;
        $naslov = "Promjena lozinke";
        $poruka = "Postovani,\n\nmovo je vaša nova lozinka: '$s'";
        $sentFrom= "From: akapitan@foi.hr";
        mail($primatelj, $naslov, $poruka, $sentFrom);
        
        $upit = "update korisnik set lozinka = '$s' where email='" . $email . "' ";
        if($baza->updateDB($upit)){
            $skripta ="Korisnik je uspješno pomjenio lozinku. "; 
            $baza->unosDnevnik($skripta); 
            $baza->unosBodovi('10', '15');
        }
    }

    
    
}
SmartyDirektoriji($smarty);
SmartyVarijable($smarty);


$smarty->assign("title","Zaboravljena lozinka");
$smarty->assign("korisnik" , "");
$smarty->assign("uloga" , "");
$bodovi = 0;  
$smarty->assign("bodovi", $bodovi); 

$smarty->assign("prikazi","hidden");
$smarty->assign('greska', $greska);

$smarty->display("_header_unsigned.tpl");
$smarty->display("navigacija.tpl");
$smarty->display("index.tpl");
$smarty->display("nova_lozinka.tpl");

    
ob_end_flush();
