<?php
include 'smarty.php';
require './baza.class.php';
include 'virtualnoVrijeme.php';
ob_start();
session_start();
/*if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}*/
    
if(isset($_SESSION['id_korisnik'])){
    header("Location: index_signed.php");
}
$baza = new Baza();
$smarty = new Smarty();
$greska = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $korisnicko_ime = $_POST['korime'];
    $lozinka = $_POST['lozinka'];
        
    if (empty($_POST['korisnicko_ime']) && empty($_POST['lozinka'])) {
        $greska .= "Unesite sve vrijenosti<br>";
    }
    else {
        $upit3 = "select * from korisnik where korisnicko_ime='" . $korisnicko_ime . "' and  lozinka='" . $lozinka . "'";
        $rezultat = $baza->selectDB($upit3);
            
        if ($rezultat->num_rows == 1) {
            
            $podaci = mysqli_fetch_array($rezultat);
            $korisnicko_ime = $podaci['korisnicko_ime'];
            $lozinka = $podaci['lozinka'];
            $two_step = $podaci['two_step'];
            $pokusaj = $podaci['pokusaj'];
            $uloga = $podaci['uloga'];
            $email = $podaci['email'];
            $jedinstveni =(strtotime($podaci['jedinstveni']));
            $jedinstveniDatum = $podaci["jedinstveniDatum"];
            $jedinstveniDatum2 = strtotime($jedinstveniDatum);
            //$vritualnoVrijemeS = date('d.m.Y H:i', $vritualnoVrijeme);
            
                
            $status = $podaci['status']; // 0->'aktiviran', 1->neaktiviran, 2->zaključan
                
            if ($status == 2) {
                    $greska = 'Nažalost, Vaš račun je blokiran od više strane. Kontaktirajte administratora';
                    $skripta =" ". $korisnicko_ime . " - pokušaj prijave s blokiranog računa"; 
                    $baza->unosDnevnik($skripta);
                }
            elseif ($status == 1) {
                    $greska = 'Račun još nije aktiviran. Aktivirajte ga putem mail-a (provjerite vaš poštanski sandučić).';
                    $skripta =" ". $korisnicko_ime . " - pokušaj prijave s neaktiviranog računa"; 
                    $baza->unosDnevnik($skripta);
                }
            elseif ($status == 0){
                if($two_step == 0){
                    
                        
                    $greska = "Uspjesno kreirana prijava<br>";
                    $_SESSION['korisnicko_ime'] = $podaci['korisnicko_ime'];    
                    $_SESSION['uloga'] = $podaci['uloga'];
                    $_SESSION['id_korisnik'] = $podaci['korisnik_id'];;
                    $_SESSION['ime'] = $podaci['ime'];
                    $_SESSION['prezime'] = $podaci['prezime'];
                    $_SESSION['email'] = $podaci['email'];
                    $_SESSION['vrijemePostavljen'] = time();
                    $idKorisnik = $podaci['korisnik_id'];
                    $upit2 = "SELECT  sum(ukupno_bodova) as ukupno FROM `log_bodovi` WHERE  korisnik ='$idKorisnik'";
                    $baza->unosBodovi('4', '5');  
                    $skripta =" Korisnik se uspjesno prijavio normalnom prijavom.";

                    $rezultat2 = $baza->selectDB($upit2);
                    if ($rezultat2->num_rows == 1) {
                            $podaci = mysqli_fetch_array($rezultat2);
                            $bodovi = $podaci["ukupno"];
                            $_SESSION['bodovi'] = $bodovi;
                            echo $_SESSION['bodovi'] ;
                    }
                    
                    $vrijeme = vrijemeV();
                        
                    if(!isset($_COOKIE["korisnicko_ime"])) {
                        setcookie("korisnicko_ime", $korisnicko_ime, $vrijeme + (60*60*24*30*3));
                        $cookie_korisnik=$korisnicko_ime;
                    }
                    $skripta ="Korisnik se ulogirao normalnom prijavom"; 
                    $baza->unosDnevnik($skripta);
                    //TODO: Log bodovi
                    header("Location: index_signed.php");
                }
                elseif ($two_step == 1){
                    $jedinstveniKod = md5($korisnicko_ime);
                    $primatelj = $email;
                    $naslov = "Jedinstveni kod prijave";
                    $poruka = "Postovani,\n\nmovo je jedinstveni broj prijave: {$jedinstveniKod}";
                    $sentFrom= "From: akapitan@foi.hr";
                    $vrijeme = vrijemeV();
                    
                    $vrijemeF = date('Y-m-d H:i:s', $vrijeme);
                    
                    
                    $greska = " jedinstveni broj prijave: $jedinstveniKod<br>";
                    if($_POST['kod']==NULL){
                        mail($primatelj, $naslov, $poruka, $sentFrom);
                        $upit = "update korisnik set jedinstveni='$jedinstveniKod', jedinstveniDatum='$vrijemeF' where korisnicko_ime='" . $korisnicko_ime . "' ";
                        $baza->updateDB($upit);
                        $greska .= "poslan je mail s aktivacijskim kodom";
                        $skripta ="Korisnik je zatrazio aktivacijski kod preko emaila. "; 
                        $baza->unosDnevnik($skripta); 
                    }    
                    if (isset($_POST['kod'])!=NULL) {
                        $kod = $_POST['kod'];
                        $vrijeme = vrijemeV();
                        
                        if ($jedinstveniKod == $kod && (($jedinstveniDatum2+(5*60)) >= $vrijeme)) {
                            $greska .= "Uspjesno kreirana prijava<br>";
                                
                            $_SESSION['uloga'] = $podaci['uloga'];
                            $_SESSION['id_korisnik'] = $podaci['korisnik_id'];
                            $idKorisnik = $podaci['korisnik_id'];
                            $_SESSION['ime'] = $podaci['ime'];
                            $_SESSION['prezime'] = $podaci['prezime'];
                            $_SESSION['email'] = $podaci['email'];
                            $_SESSION['korisnicko_ime'] = $podaci['korisnicko_ime'];
                            $_SESSION['vrijemePostavljen'] = time();
                            $baza->unosBodovi('5', '10');  
                            $skripta =" Korisnik se uspjesno prijavio dvostrukom prijavom.";
                            $upit2 = "SELECT  sum(ukupno_bodova) as ukupno FROM `log_bodovi` WHERE  korisnik ='$idKorisnik'";
                            $rezultat2 = $baza->selectDB($upit2);
                            if ($rezultat2->num_rows == 1) {
                                    $podaci = mysqli_fetch_array($rezultat2);
                                    $bodovi = $podaci["ukupno"];
                                    $_SESSION['bodovi'] = $bodovi;
                                    echo $_SESSION['bodovi'] ;
                            }   
                            if(!isset($_COOKIE["korisnicko_ime"])) {
                        setcookie("korisnicko_ime", $korisnicko_ime, $vrijeme + (60*60*24*30*3));
                        $cookie_korisnik=$korisnicko_ime;
                    }
                        
                            $skripta ="Korisnik se ulogirao dvostrukom prijavom"; 
                            $baza->unosDnevnik($skripta); 
                            //TODO: Log bodovi
                            header("Location: index_signed.php");
                        } else {
                            $greska .= "Kod nije ispravan ili je pršlo 5 minuta od slanja koda<br>";
                            $greska .= " jedinstveni broj prijave: $jedinstveniKod<br>";
                            $skripta ="Korisnik se neuspješno prijavio dvostrukom prijavom"; 
                            $baza->unosDnevnik($skripta);    
                            //header("Location: prijava.php");
                                
                        }
                            
                    } else {
                        $greska = "";
                    }
                }
        }
            
        }
        else {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $korisnicko_ime = $_POST['korime'];
                $upit3 = "select status, pokusaj, uloga from korisnik where korisnicko_ime='" . $korisnicko_ime . "'";
                $rezultat = $baza->selectDB($upit3);
                if ($rezultat->num_rows != 0) {
                    
                        $podaci = mysqli_fetch_array($rezultat);
                        $status = $podaci['status'];
                        $pokusaj = $podaci['pokusaj'];
                            
                        $uloga = $podaci['uloga'];
                            
                            
                            
                        if(!($uloga == 1 | $status == 2)){
                            if($pokusaj < 2){
                                $upit = "update korisnik set pokusaj=(pokusaj+1) where korisnicko_ime='" . $korisnicko_ime . "' ";
                                $baza->updateDB($upit);
                                $pokusaj = $pokusaj +1;
                                
                                $skripta =" ". $korisnicko_ime . " - Krivo uneseno korisnicko ime i/ili lozinka. " ."Broj pokusaja: " . $pokusaj; 
                                $baza->unosDnevnik($skripta);
                            }
                            if($pokusaj == 2){
                                $upit = "update korisnik set status='2',pokusaj=0 where korisnicko_ime='" . $korisnicko_ime . "' ";
                                $baza->updateDB($upit);
                                $skripta =" ". $korisnicko_ime . " - broj pokušaja prijave: 3. Korisnik je zaključan. " ; 
                                $baza->unosDnevnik($skripta);
                            }
                    }
                }
                    
                $greska = "Netocno uneseno korisnicko ime i/ili lozinka";
            } else {
                $greska = "greska";
            }
        }
    }   
        
}
    
$smarty->assign("korisnik" , "");
$smarty->assign("uloga" , "");
 $bodovi = 0;       
SmartyDirektoriji($smarty);
SmartyVarijable($smarty);
$smarty->assign('greska', $greska);
$smarty->assign('title', 'Prijava');
$smarty->assign("prikazi", "hidden");
$smarty->assign("bodovi" , $bodovi);
$smarty->display('_header_unsigned.tpl');
$smarty->display('navigacija.tpl');
$smarty->display('prijava.tpl');
    
ob_end_flush();