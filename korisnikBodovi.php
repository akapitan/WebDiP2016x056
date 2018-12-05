<?php
header('Content-Type: text/html; charset=utf-8');
include 'smarty.php';
include 'baza.class.php';
include 'istekSesije.php';

ob_start();
session_start();
$baza = new Baza();
$smarty = new Smarty();
$greska = "";
$ispis = "";

if(isset($_SESSION['vrijemePostavljen'])){
    $i = istekSesije($_SESSION['vrijemePostavljen']);   
    
}
//$listaKorisnika = "";
if(!isset($_SESSION['korisnicko_ime'])){
    header("Location: prijava.php");
    exit();
}

 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "promjeniStatus")  
      {  
           $idKoisnik = $_GET["id"]; 
           $status = $_GET["status"];
           
           if($status == 2){
               $upit = "UPDATE  korisnik SET status = '0' WHERE korisnik_id='$idKoisnik'";
               $baza->updateDB($upit);
               
               $skripta ="Admin - postavio je korisnika u status zakljucan "; 
               $baza->unosDnevnik($skripta);;
           }
           else if ($status == 0){
               $upit = "UPDATE  korisnik SET status = '2' WHERE korisnik_id='$idKoisnik'";
               $baza->updateDB($upit);
               
               $skripta ="Admin - postavio je korisnika u status otkljucan "; 
               $baza->unosDnevnik($skripta);;
           }
      }
 }


SmartyDirektoriji($smarty);
SmartyVarijable($smarty);

$korisnik = $_SESSION['korisnicko_ime'];

$smarty->assign("title" , "Statistika");
$smarty->assign("korisnik" , $korisnik);
    
$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-U-icon.png");
    

$smarty->assign("prikazi", "visible");
$smarty->display('_header.tpl');
$smarty->display('navigacija_korisnik.tpl');    

$smarty->display('index.tpl');
$idKorisnik = $_SESSION['id_korisnik'];
$upit = "SELECT l.datum, a.opis, l.ukupno_bodova FROM `log_bodovi` l, korisnik k, akcija a WHERE l.korisnik = k.korisnik_id AND l.akcija = a.akcija_id and k.korisnik_id ='$idKorisnik'";
$upit2 = "SELECT  sum(ukupno_bodova) as ukupno FROM `log_bodovi` WHERE  korisnik ='$idKorisnik'";


$rezultat2 = $baza->selectDB($upit2);
if ($rezultat2->num_rows == 1) {
        $podaci = mysqli_fetch_array($rezultat2);
        $bodovi = $podaci["ukupno"];
echo '<h5 style="font-size: 15px;"> Broj Ostvarenih bodova: ' . $bodovi . '</h5>';

}

if(isset($_GET['sort'])){
    if ($_GET['sort'] == 'datum')
    {   
        $upit .= " ORDER BY datum";
        
    }
    elseif ($_GET['sort'] == 'akcija')
    {   
        $upit .= " ORDER BY opis";
    }
    elseif ($_GET['sort'] == 'bodovi')
    {        
        $upit .= " ORDER BY l.ukupno_bodova ";
    }
   
}
$upitCijelaStranica = $upit;  
$upitKolikoPoStranici = 'SELECT * FROM `postavketrajanja` WHERE id = 1';
$brojElemenataPoStraniciArray = $baza->selectDB($upitKolikoPoStranici);
$brojElemenata = $brojElemenataPoStraniciArray->fetch_array();
$brojElemenataFinal = $brojElemenata['vrijednost'];

if(isset($_GET['stranica'])){
    $limit = (($_GET['stranica'] -1) * ($brojElemenataFinal));
    
                
    $upit .= " LIMIT $limit, $brojElemenataFinal";
}else{
        $upit .= " LIMIT 0, $brojElemenataFinal";
                
    }


$rezultat = $baza->selectDB($upit);
while($row = mysqli_fetch_assoc($rezultat)){
  $data[] = $row;
}
if(!(isset($data))){
    $data = array();
}

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

if(!(isset($listaStranica))){
    $listaStranica = array();
}
//echo '<pre>'; print_r($upit); echo '</pre>';

$smarty->assign("data", $data);
$smarty->assign("stranice",$listaStranica);  
$smarty->display('korisnikBodovi.tpl');

ob_end_flush();
?>