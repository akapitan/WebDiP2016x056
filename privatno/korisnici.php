<?php
include '../baza.class.php';
session_start();
$baza = new Baza();

$upit = "SELECT * FROM korisnik";
$rezultat = $baza->selectDB($upit);
$tablica = "";
$tablica .= "<table>
    <tr>
    <th>Korisničko ime</th>
    <th> Ime</th>
    <th>Lozinka</th>
    <th>Email</th>
    </tr>";
foreach ($rezultat as $data){
    $tablica.= "<tr>";
    $tablica .= "<td>" . $data["korisnicko_ime"] . "</td><td>" . $data["ime"] . "</td><td>" . $data["lozinka"] . "</td><td>" . $data["email"] . "</td>";
    
    $tablica .= "</tr>";
    }
    $tablica .= "</table>";
?>

<html>
    <head>
        <title>O autoru</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Zadaca_05">
        <meta name="keywords" content="HTML, CSS, FOI, WebDip, Web, Dizajn, Programiranje">
        <meta name="autor=" content="Aleksandar Kapitan">
        <link rel="stylesheet" type="text/css" href="../css/akapitan.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
        <script src="js/adminStatistikaGraf.js"></script>
            
    </head>
    <body>
        <section id="header"></section>
        <nav class="nav">
            <ul>
                <li class="aktivni"><strong><a href="./index.php" > Početna</a></strong></li>
                <li><a href="../oAutoru.html"> O Autoru</a></li>
                <li><a href="../dokumentacija.html"> Dokument</a></li>
                <li><a href="../prijava.php"> Prijava</a></li>
                <li><a href="../registracija.php"> Registracija</a></li>
                    
            </ul>
        </nav>
        <section class="sadrzaj">
          
        <?php echo $tablica; ?>
        </section>