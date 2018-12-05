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


if(!isset($_SESSION['email'])){
	header("Location: prijava.php");
	exit();
}

    
$smarty = new Smarty();
$baza = new Baza();
    
  
SmartyDirektoriji($smarty);
SmartyVarijable($smarty);
    
$korisnik = $_SESSION['korisnicko_ime'];
$uloga = $_SESSION['uloga'];
$smarty->assign("title" , "Početna");
$smarty->assign("korisnik" , $korisnik);
    
if($uloga == 1){$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-A-icon.png");}
elseif ($uloga == 2) {$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-M-icon.png");}
elseif ($uloga == 3) {$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-U-icon.png");}
    
//$smarty->assign("uloga" , $uloga);
$smarty->assign("prikazi", "visible");
$smarty->display('_header.tpl');
    
if($uloga == 1){
    $smarty->display('navigacija_admin.tpl');
}elseif ($uloga == 2){
    $smarty->display('navigacija_moderator.tpl');
}elseif ($uloga == 3){
    $smarty->display('navigacija_korisnik.tpl');
}
    
$smarty->display('index.tpl');
 if($uloga == 3){
     $vrijeme = vrijemeV();
     $vrijemeF = date('Y-m-d H:i:s', $vrijeme);
    $rezultat = $baza->selectDB("SELECT kategorija.naziv as kategorijaNaziv, letci.naziv, letci.opis, letci.slika, letci.letak_id FROM letci JOIN kategorija ON letci.kategorija = kategorija.kategorija_id WHERE `datum_do`>='$vrijemeF'");
  
    $nazivKategorije2 = "";
    foreach ($rezultat as $value ){

        $nazivKategorije = $value["kategorijaNaziv"];

        $title=$value["naziv"];
        $desc=$value["opis"];
        $url = $value["slika"];
        $letak_id = $value["letak_id"];

        if( !($nazivKategorije === $nazivKategorije2)){
            echo "<h2 style='margin-top: 20px; border-bottom:solid grey 2px ; float: left;width: 100%;'>".$nazivKategorije."</h2>"."<div style='float: left; max-width: none; '>";
            $nazivKategorije2 = $nazivKategorije;
        }


        $smarty->assign("naslov","$title");
        $smarty->assign("opis","$desc");
        $smarty->assign("url","$url");
        $smarty->assign("id","$letak_id");
        $smarty->assign("disable", "");
        $smarty->display("letcirezervacija.tpl");
    }
}else{
    $rezultat = $baza->selectDB('SELECT kategorija.naziv as kategorijaNaziv, letci.naziv, letci.opis, letci.slika, letci.letak_id FROM letci JOIN kategorija ON letci.kategorija = kategorija.kategorija_id ');
  
    $nazivKategorije2 = "";
    foreach ($rezultat as $value ){

        $nazivKategorije = $value["kategorijaNaziv"];

        $title=$value["naziv"];
        $desc=$value["opis"];
        $url = $value["slika"];
        $letak_id = $value["letak_id"];

        if( !($nazivKategorije === $nazivKategorije2)){
            echo "<h2 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%;'>".$nazivKategorije."</h2>"."<div style='float: left; max-width: none; '>";
            $nazivKategorije2 = $nazivKategorije;
        }


        $smarty->assign("naslov","$title");
        $smarty->assign("opis","$desc");
        $smarty->assign("url","$url");
        $smarty->assign("id","$letak_id");
        $smarty->assign("disable", "");
        $smarty->display("letcirezervacija.tpl");
    }
}    
    
    
ob_end_flush();
?>