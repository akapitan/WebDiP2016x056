<?php
include 'baza.class.php';
$baza = new Baza();
session_start();
if(isset($_POST["OdabirS"])){
    $korisnik = $_POST["OdabirS"];

    $upitStatistika ="SELECT k.korisnicko_ime, a.opis, SUM(l.ukupno_bodova) FROM korisnik k LEFT JOIN log_bodovi l on l.korisnik = k.korisnik_id JOIN akcija a ON a.akcija_id=l.akcija WHERE korisnik_id = '$korisnik' GROUP BY l.akcija";
    $rezultatStatistika = $baza->selectDB($upitStatistika);
    while($row = mysqli_fetch_assoc($rezultatStatistika)){
      $dataStatistika[] = $row;
    }
    echo json_encode($dataStatistika);

}
if(isset($_POST["OdabirSS"])){
   
    $upit = "SELECT a.opis, sum(l.ukupno_bodova) FROM korisnik k, log_bodovi l, akcija a WHERE k.korisnik_id=l.korisnik AND l.akcija = a.akcija_id GROUP BY a.opis";
    
    $rezultatStatistika = $baza->selectDB($upit);
    while($row = mysqli_fetch_assoc($rezultatStatistika)){
      $dataStatistika[] = $row;
    }
    echo json_encode($dataStatistika);
}
if(isset($_POST["OdabirSSS"])){
   
    $upit = "SELECT k.korisnicko_ime, sum(l.ukupno_bodova) FROM `log_bodovi` l, korisnik k, akcija a WHERE l.korisnik = k.korisnik_id AND a.akcija_id = l.akcija Group by(korisnicko_ime)";
    
    $rezultatStatistika = $baza->selectDB($upit);
    while($row = mysqli_fetch_assoc($rezultatStatistika)){
      $dataStatistika[] = $row;
    }
    echo json_encode($dataStatistika);
}



?>
