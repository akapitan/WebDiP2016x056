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
$smarty->assign('greska', $greska);
$smarty->assign("kor","");
$smarty->assign("imee","");
$smarty->assign("prez","");
$smarty->assign("naziv","");
$smarty->assign("datum_od","");
$smarty->assign("datum_do","");
//$smarty->assign("prikazii","none");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $kod = $_POST['naziv'];
    
    
    $upit = "SELECT k.korisnicko_ime, k.ime, k.prezime, u.naziv, s.datum_od, s.datum_do FROM `korisnicki_kuponi` s, korisnik k, kuponi u  WHERE s.`korisnik` = k.korisnik_id AND s.kupon = u.kupon_id AND `kod`= '$kod'";
    $greska = "";
    $rezultat = $baza->selectDB($upit);
    
   if ($rezultat->num_rows == 1) {
            
            $podaci = mysqli_fetch_array($rezultat);
            $kor= $podaci["korisnicko_ime"];
            $ime = $podaci["ime"];
            $prez = $podaci["prezime"];
            $naziv = $podaci["naziv"];
            $datumOd = $podaci["datum_od"];
            $datum_do = $podaci["datum_do"];
            
            $smarty->assign("kor",$kor);
            $smarty->assign("imee",$ime);
            $smarty->assign("prez",$prez);
            $smarty->assign("naziv",$naziv);
            $smarty->assign("datum_od",$datumOd);
            $smarty->assign("datum_do",$datum_do);
            //$smarty->assign("prikazi","block");
            $smarty->assign("greska","Kod je pronađen");
            
            
            
   }
   else{
       $smarty->assign("kor","");
       $smarty->assign("imee","");
       $smarty->assign("prez","");
       $smarty->assign("naziv","");
       $smarty->assign("datum_od","");
       $smarty->assign("datum_do","");
       //$smarty->assign("prikazii","none");
       $smarty->assign("greska","Kod nije pronađen");
       
   }
    
    
}
SmartyDirektoriji($smarty);
SmartyVarijable($smarty);


$smarty->assign("title","Provjera kupona");

$smarty->assign("prikazi","block");



$smarty->display("_header.tpl");
$uloga = $_SESSION['uloga'];
$smarty->display("_header.tpl");
if($uloga == 1){
    $smarty->display('navigacija_admin.tpl');
}elseif ($uloga == 2){
    $smarty->display('navigacija_moderator.tpl');
}

$smarty->display("moderatorProvjeriKupon.tpl");

    
ob_end_flush();
