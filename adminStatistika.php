<?php
header('Content-Type: text/html; charset=utf-8');
include 'smarty.php';
include 'baza.class.php';
include 'adminPDF.php';
include 'istekSesije.php';
error_reporting(0);

ob_start();
session_start();
$baza = new Baza();
$smarty = new Smarty();
$greska = "";
$ispis = "";
//$listaKorisnika = "";
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




SmartyDirektoriji($smarty);
SmartyVarijable($smarty);

$korisnik = $_SESSION['korisnicko_ime'];
$uloga = $_SESSION['uloga'];
$smarty->assign("title" , "Statistika");
$smarty->assign("korisnik" , $korisnik);
    
if($uloga == 1){$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-A-icon.png");}

    
//$smarty->assign("uloga" , $uloga);
$smarty->assign("prikazi", "visible");
$smarty->display('_header.tpl');
$smarty->display('navigacija_admin.tpl');    

$smarty->display('index.tpl');

if(isset($_GET["show"])){
    if($_GET['show'] == 'statSviKorisnici'){
       $upit = "SELECT l.id,  k.korisnicko_ime,sum(l.ukupno_bodova) FROM `log_bodovi` l, korisnik k, akcija a WHERE l.korisnik = k.korisnik_id AND"
        . " a.akcija_id = l.akcija Group by(korisnicko_ime)";
      
    }
    elseif ($_GET['show'] == 'statAkcija'){
        
       $upit = "SELECT l.id,  a.opis,sum(l.ukupno_bodova) FROM `log_bodovi` l, korisnik k, akcija a WHERE l.korisnik = k.korisnik_id AND"
        . " a.akcija_id = l.akcija "; 
       
       if(isset($_GET['korisnik'])){
           $upit .="AND k.korisnicko_ime ='" .$_GET['korisnik'] ."'";
       }
       $upit .= "  Group by(akcija)";
    }
    
}



if(isset($_GET['sort'])){
    if ($_GET['sort'] == 'id')
    {
        $upit .= " ORDER BY id";
        
    }
    elseif ($_GET['sort'] == 'korisnicko_ime')
    {
        $upit .= " ORDER BY korisnicko_ime";
    }
    elseif ($_GET['sort'] == 'opis')
    {
        $upit .= " ORDER BY opis";
    }
        elseif ($_GET['sort'] == 'akcija')
    {
        $upit .= " ORDER BY opis";
    }
        elseif ($_GET['sort'] == 'sum(l.ukupno_bodova)')
    {
        $upit .= " ORDER BY sum(l.ukupno_bodova)";
    }
}


$rezultat = $baza->selectDB($upit);
while($row = mysqli_fetch_assoc($rezultat)){
  $data[] = $row;
}
if(!(isset($data))){
    $data = array();
}
$rezultatKorisnik = $baza->selectDB("SELECT korisnik_id, korisnicko_ime FROM korisnik");
foreach ($rezultatKorisnik as  $value){
    //$dataKorisnik[$value["korisnik_id"]]  = "<a href='adminStatistika.php?show=statAkcija&korisnik='>";
    $str = "adminStatistika.php?show=statAkcija&korisnik=" .$value["korisnicko_ime"];
    $dataKorisnik[$str] = $value["korisnicko_ime"];
    
    }
foreach ($rezultatKorisnik as  $value){
    $dataKorisnik2[$value["korisnik_id"]]=$value["korisnicko_ime"];
    }
if(empty($dataKorisnik)){
    $dataKorisnik = array();
}

$rezultatKategorija = $baza->selectDB("SELECT akcija_id, opis FROM akcija");
foreach ($rezultatKategorija as  $value){
    $dataAkcija[$value["akcija_id"]]=$value["opis"];
    }
    
$upitStatistika ="SELECT k.korisnicko_ime , a.opis, sum(l.ukupno_bodova) FROM korisnik k, log_bodovi l, akcija a WHERE k.korisnik_id=l.korisnik AND l.akcija = a.akcija_id GROUP BY a.opis";
$rezultatStatistika = $baza->selectDB($upitStatistika);
while($row = mysqli_fetch_assoc($rezultatStatistika)){
  $dataStatistika[] = $row;
}

//echo '<pre>'; print_r($data); echo '</pre>';
//SELECT k.korisnicko_ime , a.opis, sum(l.ukupno_bodova) FROM korisnik k, log_bodovi l, akcija a WHERE k.korisnik_id=l.korisnik AND l.akcija = a.akcija_id GROUP BY a.opis

$smarty->assign("data", $data);
$smarty->assign("opcijeKorisnik", $dataKorisnik);
$smarty->assign("opcijeKorisnik2", $dataKorisnik2);
$smarty->assign("opcijaAkcija", $dataAkcija);
$smarty->assign("prva", 1);
$smarty->display('adminStatistika.tpl');



$smarty->display("adminStatistikaGraf.tpl");

ob_end_flush();
?>