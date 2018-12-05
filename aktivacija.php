<?php

include 'baza.class.php';
include 'virtualnoVrijeme.php';
$baza = new Baza();

if (empty($_GET['aktivacijskiKod'])) {
echo "Morate upotrijebiti aktivacijski kod. <br>";
}

if (isset($_GET['aktivacijskiKod'])) {
$poruka="";
$aktivacijski_kod = $_GET['aktivacijskiKod'];
$upit = "SELECT * from korisnik where aktivacijskiKod = '{$aktivacijski_kod}'";
$rezultat1 = $baza ->selectDB($upit);
$lista = $rezultat1->fetch_array();

if($rezultat1->num_rows==0){
    echo 'Neispravan kod ili je korisnicki racun vec aktiviran. <br>';
    $skripta =" ". $lista['korisnicko_ime'] . " - Neuspjela aktivacija. " ; 
    $baza->unosDnevnik($skripta);
    die();
}
$vrijeme = vrijemeV();
if((strtotime($lista['pridruzen'])+5*60*60) > $vrijeme){  
$upit = "UPDATE korisnik set status = 0, aktivacijskiKod =''  WHERE korisnik_id = '".$lista['korisnik_id']."'";
$rezultat = $baza->updateDB($upit);
echo 'Aktivacija je uspješna. <br>';
$skripta =" ". $lista['korisnicko_ime'] . " - Uspješna aktivacija. " ; 
$baza->unosDnevnik($skripta);
$korisnik = $lista['korisnik_id'];
$baza->unosBodoviReg('1', '20', $korisnik);

header("Location: prijava.php");
}else {
    echo 'Predugo ste čekali. Prešlo je 5 sati. <br>';
    $skripta =" prešlo je 5 sati  - Neuspjela aktivacija. " ; 
    $baza->unosDnevnik($skripta);
    
}
}
?>