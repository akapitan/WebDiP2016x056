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
if($_SESSION['uloga']>2){
    header("Location: index_signed.php");
    exit();
}
    
$smarty = new Smarty();
$baza = new Baza();


$greska = "";
$target_dir = "uploads/narudzbe/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (!(empty( $_FILES["fileToUpload"]["tmp_name"] ))){
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
        if($provjera){
            if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
                $vrijeme = vrijemeV();
                $vrijemeF = date('Y-m-d H:i:s', $vrijeme);

                $slikaUpit = $target_file;
                $greska .= "<br>Slika ". basename( $_FILES["fileToUpload"]["name"]). " je stavljena na server.";
                $upit = "update naruceni set datum_do='$vrijemeF', status ='2', podjeljenji='0', slobodno='0', slika='$slikaUpit'   where narudzba_id= '$id' ";
                $baza->updateDB($upit);
                
                $upitNarudzbaKorisnik = "SELECT k.email FROM naruceni n JOIN korisnik k WHERE n.korisnik = k.korisnik_id AND n.narudzba_id = '$id'";
                $korisnikEmail = $baza->selectDB($upitNarudzbaKorisnik);
                $lista = $korisnikEmail->fetch_array();
                //echo '<pre>'; print_r($lista['email']); echo '</pre>';    
                    
                $primatelj = $lista['email'];
                $naslov = "Obrađena narudžba";
                $poruka = "Postovani,\n\nObrađena je vaša narudžba. \nMolimo provjerite gotov proizvod na našem internet servisu.\n\nLijep pozdrav, \nVaš tim";
                $sentFrom= "From: akapitan@foi.hr";
                mail($primatelj, $naslov, $poruka, $sentFrom);
                
                $skripta ="Moderator " .$_SESSION['korisnicko_ime'] ." je izvršio narudzbu " .$id ." i poslao mail korisniku na adresu " .$lista['email']; 
                $baza->unosDnevnik($skripta);
                
            }else{

                $slikaUpit = "NULL";
            }
        }    
    }
    else{
        $greska = "Morate predati datoteku ";
    }
}

SmartyDirektoriji($smarty);
SmartyVarijable($smarty);

$smarty->assign("title" , "Narudžbe");
$smarty->assign("greska" , $greska);
$uloga = $_SESSION['uloga'];
$smarty->display('_header.tpl');
if($uloga == 1){
    $smarty->display('navigacija_admin.tpl');
}elseif ($uloga == 2){
    $smarty->display('navigacija_moderator.tpl');
}elseif ($uloga == 3){
    $smarty->display('navigacija_korisnik.tpl');
}
$smarty->display('index.tpl');

$upit = "SELECT letci.naziv AS naziv, letci.opis,naruceni.slika, korisnik.korisnik_id,naruceni.narudzba_id AS id,naruceni.datum_od AS datum, naruceni.kolicina as kolicina,"
        . " naruceni.opis, naruceni.status, naruceni.podjeljenji, naruceni.slobodno FROM `naruceni`, `letci`,`korisnik` WHERE naruceni.letak=letci.letak_id AND "
        . "naruceni.korisnik = korisnik.korisnik_id AND naruceni.status = 1 ";

$upitKolikoPoStranici = 'SELECT * FROM `postavketrajanja` WHERE id = 3';
$brojElemenataPoStraniciArray = $baza->selectDB($upitKolikoPoStranici);
$brojElemenata = $brojElemenataPoStraniciArray->fetch_array();
$brojElemenataFinal = $brojElemenata['vrijednost'];

$upitCijelaStranica = $upit; 

$tabliceSadrzajSve = $baza->selectDB($upitCijelaStranica);
while($row = mysqli_fetch_assoc($tabliceSadrzajSve)){
    $dataTablice2[] = $row;
    }
    $brojRedaka = mysqli_num_rows($tabliceSadrzajSve);
    $stranica = ceil($brojRedaka/$brojElemenataFinal);
    $listaStranica = array();
    for ($i=1; $i <= $stranica;$i++){
        $listaStranica[] = $i;
    }
    


if(isset($_GET['stranica']) && $_GET['tip'] == 'naruceni'){
    $limit = (($_GET['stranica'] -1) * ($brojElemenataFinal));
    
                
    $upit .= " LIMIT $limit, $brojElemenataFinal";
}else{
        $upit .= " LIMIT 0, $brojElemenataFinal";
                
    }
    
$rezultat = $baza->selectDB($upit);
 
$nazivKategorije2 = "";
echo "<h2 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%;'>Naručeni</h2>"."<div style='float: left; width: 82%; '>";
foreach ($rezultat as $value ){
    
    
    
    $title=$value["naziv"];
    $desc=$value["opis"];
    $url = $value["slika"];
    $id = $value["id"];
    $kolicina = $value["kolicina"];
    $datum = $value["datum"];
        
        
        
        
    $smarty->assign("kolicina", $kolicina);  
    $smarty->assign("datum", $datum); 
    $smarty->assign("naslov","$title");
    $smarty->assign("opis","$desc");
    $smarty->assign("url","");
    $smarty->assign("id","$id");
    $smarty->assign("disable", "");
    $smarty->display("moderatorNarudzbe.tpl");
    
    
}
 $smarty->assign("stranice",$listaStranica);   
 $smarty->assign("letci", "moderatorNarudzbe.php")  ; 
 $smarty->assign("tip", "naruceni")  ; 
 
 echo "</div><h5 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%; visibility:hidden;'>Izrađeni</h5>"."<div style='float: left; max-width: none; '>";
 $smarty->display("letciFooter.tpl");

 $upit2 = "SELECT letci.naziv AS naziv, letci.opis,naruceni.slika, korisnik.korisnik_id,naruceni.narudzba_id AS id,naruceni.datum_od AS datum,naruceni.datum_do as datum2, naruceni.kolicina as kolicina,"
        . " naruceni.opis, naruceni.status, naruceni.podjeljenji, naruceni.slobodno FROM `naruceni`, `letci`,`korisnik` WHERE naruceni.letak=letci.letak_id AND "
        . "naruceni.korisnik = korisnik.korisnik_id AND naruceni.status = 2 ";
 
 $upitCijelaStranica = $upit2; 

$tabliceSadrzajSve = $baza->selectDB($upitCijelaStranica);
while($row = mysqli_fetch_assoc($tabliceSadrzajSve)){
    $dataTablice2[] = $row;
    }
    $brojRedaka = mysqli_num_rows($tabliceSadrzajSve);
    $stranica = ceil($brojRedaka/$brojElemenataFinal);
    $listaStranica = array();
    for ($i=1; $i <= $stranica;$i++){
        $listaStranica[] = $i;
    }
    


if(isset($_GET['stranica']) && $_GET['tip'] == 'obradjeni'){
    $limit = (($_GET['stranica'] -1) * ($brojElemenataFinal));
    
                
    $upit2 .= " LIMIT $limit, $brojElemenataFinal";
}else{
        $upit2 .= " LIMIT 0, $brojElemenataFinal";
                
    }
 
$rezultat = $baza->selectDB($upit2);



 
$nazivKategorije2 = "";
echo "<h2 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%;'>Obrađeni</h2>"."<div style='float: left; width: 82%; '>";
foreach ($rezultat as $value ){
    
    
    
    $title=$value["naziv"];
    $desc=$value["opis"];
    $url = $value["slika"];
    $id = $value["id"];
    $kolicina = $value["kolicina"];
    $datum = $value["datum"];
    $datum2 = $value["datum2"];    
    $vrijeme = strtotime($datum2) - strtotime($datum);
    $vrijeme = $vrijeme/(60*60*24);
    $dana = floor($vrijeme);
    $sati = ($vrijeme - $dana)*24;
    $sati = floor($sati);
    
        
    $smarty->assign("datum2", $datum2);   
    $smarty->assign("dana", $dana);
    $smarty->assign("sati", $sati);
    $smarty->assign("kolicina", $kolicina);  
    $smarty->assign("datum", $datum); 
    $smarty->assign("naslov","$title");
    $smarty->assign("opis","$desc");
    $smarty->assign("url",$url);
    $smarty->assign("id","$id");
    $smarty->assign("disable", "");
    $smarty->display("gotoviLetci.tpl");
}

 $smarty->assign("stranice",$listaStranica);   
 $smarty->assign("letci", "moderatorNarudzbe.php")  ; 
 $smarty->assign("tip", "obradjeni")  ; 
 
 echo "</div><h5 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%; visibility:hidden;'>Izrađeni</h5>"."<div style='float: left; max-width: none; '>";
 $smarty->display("letciFooter.tpl");

