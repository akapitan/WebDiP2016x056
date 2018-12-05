<?php


include 'vanjske_biblioteke/fpdf.php';

$baza = new Baza();

if (isset($_GET['printajPdf'])) {
    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'I', 16);
    $pdf->Cell(0, 10, 'Statistika korisnika po akciji', 0, 1, 'C');
    $pdf->Cell(0, 10, '', 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(30, 5, 'Korisnicko ime', 1, 0, 'C');
    $pdf->Cell(37, 5, 'Akcija', 1, 0, 'C');
    $pdf->Cell(30, 5, 'Bodovi po akciji', 1, 0, 'C');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'I', 8);
    $upit = "SELECT k.korisnicko_ime, a.opis, SUM(l.ukupno_bodova) FROM korisnik k LEFT JOIN log_bodovi l on l.korisnik = k.korisnik_id JOIN akcija a ON a.akcija_id=l.akcija GROUP BY l.akcija";
    $rezultat = $baza->selectDB($upit);
    while ($rez = $rezultat->fetch_array()) {
        $pdf->Cell(30, 5, $rez[0], 1, 0, 'C');
        $pdf->Cell(37, 5, $rez[1], 1, 0, 'C');
        $pdf->Cell(30, 5, $rez[2], 1, 0, 'C');
        $pdf->Ln();
    }
    
        $pdf->SetFont('Arial', 'I', 16);
    $pdf->Cell(0, 10, 'Statistika po akciji', 0, 1, 'C');
    $pdf->Cell(0, 10, '', 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(30, 5, 'Akcija', 1, 0, 'C');
    $pdf->Cell(37, 5, 'Bodovi po akciji', 1, 0, 'C');
    
    $pdf->Ln();
    $pdf->SetFont('Arial', 'I', 8);
    $upit = "SELECT a.opis, sum(l.ukupno_bodova) FROM korisnik k, log_bodovi l, akcija a WHERE k.korisnik_id=l.korisnik AND l.akcija = a.akcija_id GROUP BY a.opis";
    $rezultat = $baza->selectDB($upit);
    while ($rez = $rezultat->fetch_array()) {
        $pdf->Cell(30, 5, $rez[0], 1, 0, 'C');
        $pdf->Cell(37, 5, $rez[1], 1, 0, 'C');
        //$pdf->Cell(30, 5, $rez[2], 1, 0, 'C');
        $pdf->Ln();
    }
    
        $pdf->SetFont('Arial', 'I', 16);
    $pdf->Cell(0, 10, 'Bodovi svih korisnika', 0, 1, 'C');
    $pdf->Cell(0, 10, '', 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(30, 5, 'Korisničko ime', 1, 0, 'C');
    $pdf->Cell(37, 5, 'Bodovi', 1, 0, 'C');

    $pdf->Ln();
    $pdf->SetFont('Arial', 'I', 8);
    $upit = "SELECT k.korisnicko_ime, sum(l.ukupno_bodova) FROM `log_bodovi` l, korisnik k, akcija a WHERE l.korisnik = k.korisnik_id AND a.akcija_id = l.akcija Group by(korisnicko_ime)";
    $rezultat = $baza->selectDB($upit);
    while ($rez = $rezultat->fetch_array()) {
        $pdf->Cell(30, 5, $rez[0], 1, 0, 'C');
        $pdf->Cell(37, 5, $rez[1], 1, 0, 'C');
        $pdf->Ln();
    }
    $pdf->Output('D', 'StatistikaU.pdf', true);
}


if (isset($_GET['print']) && isset($_GET['show'])) {
    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'I', 16);
    $pdf->Cell(0, 10, 'Statistika', 0, 1, 'C');
    $pdf->Cell(0, 10, '', 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(30, 5, 'Korisnicko ime', 1, 0, 'C');
    $pdf->Cell(37, 5, 'Akcija', 1, 0, 'C');
    $pdf->Cell(30, 5, 'Bodovi po akciji', 1, 0, 'C');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'I', 8);
    
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
    
    $rezultat = $baza->selectDB($upit);
    while ($rez = $rezultat->fetch_array()) {
        $pdf->Cell(30, 5, $rez[0], 1, 0, 'C');
        $pdf->Cell(37, 5, $rez[1], 1, 0, 'C');
        $pdf->Cell(30, 5, $rez[2], 1, 0, 'C');
        $pdf->Ln();
    }
    
    
    $pdf->Output('D', 'StatistikaPosebno.pdf', true);
}