<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'smarty.php';
include 'baza.class.php';

$baza = new Baza();
$smarty = new Smarty();

if(isset($_POST["korime"])) {
    $userVal = $_POST["korime"];
    $userValQuery = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime='$userVal'";
    $checker = $baza->selectDB($userValQuery);
    $num = mysqli_num_rows($checker);
    if ($num > 0) {
        print 1;
    } else {
        print "success";
    }
}

if(isset($_POST["email"])) {
    $userVal = $_POST["email"];
    $userValQuery = "SELECT email FROM korisnik WHERE email='$userVal'";
    $checker = $baza->selectDB($userValQuery);
    $num = mysqli_num_rows($checker);
    if ($num > 0) {
        print 1;
    } else {
        print "success";
    }
}
