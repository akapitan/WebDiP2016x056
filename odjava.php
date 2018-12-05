<?php

require './baza.class.php';
$baza2 = new Baza();

session_start();
$skripta ="Korisnik se odjavio"; 
$baza2->unosDnevnik($skripta);
session_unset();

session_destroy();
header("Location: prijava.php");
?>