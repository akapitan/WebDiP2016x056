<?php

require './baza.class.php';
include_once "recaptcha/AutoLoad.php";
include 'virtualnoVrijeme.php';

session_start();
ob_start();

$baza = new Baza();
$siteKey = '6Lf26EMUAAAAAKhiVv6x2r1vW8eGbx6twaUM6Tdo';
$secret = '6Lf26EMUAAAAAEcgcUd8i2341nu7lR-jKq0mZ5sa';

$greska = "";

if(isset($_SESSION['id_korisnik'])){
    header("Location: index_signed.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $korime = $_POST['korime'];
    $email = $_POST['email'];
    $lozinka1 = $_POST['lozinka1'];
    $lozinka2 = $_POST['lozinka2'];
    $ime = $_POST['ime'];
    $prez = $_POST['prez'];
      
    //empty
    if ($ime == '') {
        $greska.="Greska, ime nije uneseno <br> ";
    }
    
    if (preg_match('([(,),{,},",!,#,",\,/])' ,$ime)) {
        $greska.="Ime sadrzi nedopusteni znak (, ),{, } ,' ,! , #, \, / <br> ";
    }
    
    if ($prez == '') {
        $greska.="Prezime nije uneseno <br>";
    }
    if (preg_match('([(,),{,},",!,#,",\,/])' ,$prez)) {
        $greska.="Prezime sadrzi nedopusteni znak (, ),{, } ,' ,! , #, \, / <br> ";
    }
    //korime
    if ($korime == '') {
        $greska.="Korisnicko ime nije uneseno <br>";
    }
    if (preg_match('([(,),{,},",!,#,",\,/])' ,$korime)) {
        $greska.="Korisnicko ime sadrzi nedopusteni znak (, ),{, } ,' ,! , #, \, / <br> ";
    }
    //lozinka
    if ($lozinka1 == '') {
        $greska.="Lozinka nije unesena <br>";
    }
    if (preg_match('([(,),{,},",!,#,",\,/])' ,$lozinka1)) {
        $greska.="Lozinka sadrzi nedopusteni znak (, ),{, } ,' ,! , #, \, / <br> ";
    }
    if (strlen($lozinka1) < 5) {
        $greska.="Lozinka mora sadrzavati najmanje 5 znakova <br>";
    }
    if (strlen($lozinka1) > 15) {
        $greska.="Lozinka mora sadrzavati najvise 15 znakova <br>";
    }
    if (!preg_match("/(?=.*\d)/", $lozinka1)) {
        $greska .= "Lozinka mora sadrzavati barem jedan broj <br>";
    }
    
    
    
    
    
    //potvrda lozinke
    if ($lozinka2 == '') {
        $greska.="Potvrda lozinke nije unesena <br>";
    }
     if (preg_match('([(,),{,},",!,#,",\,/])' ,$lozinka2)) {
        $greska.="Potvrda lozinke sadrzi nedopusteni znak (, ),{, } ,' ,! , #, \, / <br> ";
    }
    if (!(($lozinka1) == ($lozinka2))) {
        $greska.="Lozinke nisu identicne <br>";
    }

    //email
    if ($email == '') {
        $greska.="Email nije unesen <br>";
    }
     if (preg_match('([(,),{,},",!,#,",\,/])' ,$email)) {
        $greska.="Email sadrzi nedopusteni znak (, ),{, } ,' ,! , #, \, / <br> ";
    }
    

    //email i korime provjera
    $upit = "select *from korisnik where email= '" . $email . "' ";
    $rezultat = $baza->selectDB($upit);
    if ($rezultat->num_rows != 0) {
        $greska.= "Zauzeta email adresa<br>";
    }
    $upit = "select *from korisnik where korisnicko_ime= '" . $korime . "' ";
    $rezultat = $baza->selectDB($upit);
    if ($rezultat->num_rows != 0) {
        $greska.= "Zauzeto korisnicko ime <br>";
    }
    //recapcha
    $recaptcha = new recaptcha\ReCaptcha($secret);
    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

    if (!$resp->isSuccess()) {
        $greska .= "Recaptcha krivo unesena.<br>";
        
    }
    if (isset($_POST['dvostrukaPrijava']) && $_POST['dvostrukaPrijava']=="1" ){
        $dvostrukaPrijava='1';
    }
    else{
         $dvostrukaPrijava='0';
    }
    /*if (!isset($_POST['dvostrukaPrijava'])){
        $dvostrukaPrijava='0';
    }*/
    //ako su provjere prosle
    if (empty($greska)) {
        $vrijeme3 = vrijemeV();
        $vrijemeF = date('Y-m-d H:i:s', $vrijeme3);
        
        $aktivacijskikod = md5($korime . time());
        $oblik = "Y-m-d H:i:s";
        $vrijeme1 = new DateTime(date($oblik));
        $vrijeme2 = $vrijeme1->format($oblik);
        $lozinkaKriptirano=sha1($lozinka2);
        $upit = "INSERT into korisnik (korisnik_id, ime, prezime, korisnicko_ime, lozinka, lozinkaKriptirano, email, aktivacijskiKod, 	pridruzen, two_step, uloga, status,  pokusaj) "
                . "values(default, '{$ime}', '{$prez}', '{$korime}', '{$lozinka1}', '{$lozinkaKriptirano}','{$email}', '{$aktivacijskikod}',"
                . "'{$vrijemeF}', '{$dvostrukaPrijava}', '3', '1',  '0');";


        if ($baza->updateDB($upit)) {
            $skripta =" ". $korime . " - Registracija, uspješna. Potrebna aktivacija" ; 
            $baza->unosDnevnik($skripta);
            $primatelj = $email;
            $naslov = "Aktivacija korisnickog racuna";
            $poruka = "Postovani,\n\nmolimo vas da aktivirate svoj korisnicki racun putem aktivacijskog linka: http://webdip.barka.foi.hr/2016_projekti/WebDiP2016x056/aktivacija.php?aktivacijskiKod={$aktivacijskikod}";
            mail($primatelj, $naslov, $poruka);
             $greska.= "Link: http://webdip.barka.foi.hr/2016_projekti/WebDiP2016x056/aktivacija.php?aktivacijskiKod={$aktivacijskikod}<br>";
            header("Location: prijava.php");
        } else {
            $greska.= "Greska pri radu s bazom podataka <br>";
        }
    }
} else {
    $greska = "";
    
    
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registracija</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Zadaca_04">
        <meta name="keywords" content="HTML, CSS, FOI, WebDip, Web, Dizajn, Programiranje">
        <meta name="autor=" content="Aleksandar Kapitan">
        <link rel="stylesheet" type="text/css" href="css/akapitan.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
    </head>
    <body>
        
        
        <section id="header">
            
            <h1>Registracija</h1>    
            <form action="./odjava.php" method="post" style=" position: absolute; top: 2px; right: 0; ">
                
                <button style=" cursor: pointer; display:none " id="logout" ><img src="http://cdn0.iconfinder.com/data/icons/large-glossy-icons/512/Logout.png"></button>
            </form>
        </section>>
        <nav class="nav">
            <ul>
                <li class="aktivni"><strong><a href="./index.php" > Početna</a></strong></li>
                <li><a href="./o_autoru.html"> O Autoru</a></li>
                <li><a href="./dokumentacija.html"> Dokument</a></li>
                <li><a href="./prijava.php"> Prijava</a></li>
                <li><a href="./registracija.php"> Registracija</a></li>
                
            </ul>
        </nav>
        
        
        <section class="sadrzaj"> 
            <section>
                <article> <?php echo $greska; ?> </article>
            </section>
            <h5 style="visibility:hidden">za validaciju</h5>
            <div id ="rege" style="text-align: left">
                <form id="form1" method="post" name="form1" action="<?PHP echo $_SERVER['PHP_SELF']; ?>"  enctype='multipart/form-data'>
                    <span class="nevidljivo"></span><br>
                    <span class="nevidljivo"></span><br>
                    <span class="nevidljivo"></span><br>
                    <span class="nevidljivo"></span><br>
                    <span class="nevidljivo"></span><br>
                    <p><label id="imeL" for="ime"  >Ime: </label>
                        <input type="text" id="ime" class="input" name="ime" placeholder="Ime" ><br>
                        <label id="prezL" for="prez" class="label">Prezime: </label>
                        <input type="text" id="prez" class="input" name="prez" placeholder="Prezime" ><br>
                        <label id="emailL" for="email" class="label">Email adresa: </label>
                        <input type="email" id="email" class="input" name="email"  placeholder="ime.prezime@posluzitelj.xxx"><br>
                        <label id="korimeL" for="korime" class="label">Korisničko ime: </label>
                        <input type="text" id="korime"  class="input" name="korime" placeholder="korisničko ime" ><br>
                        <label id="lozinka1L" for="lozinka1" class="label">Lozinka: </label>
                        <input type="password" id="lozinka1" class="input" name="lozinka1" placeholder="lozinka"><br>
                        <label id="lozinka2L" for="lozinka2" class="label">Ponovljena lozinka: </label>
                        <input type="password" id="lozinka2" class="input" name="lozinka2" placeholder="lozinka" ><br>
                        <input id="dvostrukaPrijava" type="checkbox" name="dvostrukaPrijava" value="1" > Dvostruka prijava<br></p>
                    <div class="g-recaptcha" data-sitekey="6Lf26EMUAAAAAKhiVv6x2r1vW8eGbx6twaUM6Tdo"></div>
                    
                    <input id="submit1" type="submit" value=" Registriraj se ">
                    <input id="reset1" type="reset" value=" Inicijaliziraj "> 
                </form>
            </div>
        </section>
        
        <script type="text/javascript" src="js/akapitan.js"></script>
        
    </body>
</html>


