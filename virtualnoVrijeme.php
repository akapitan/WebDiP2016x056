<?php
function dohvati() {
    $url = "http://barka.foi.hr/WebDiP/pomak_vremena/pomak.php?format=xml";
    if (!($fp = fopen($url, 'r'))) {
        echo "Greska: Nije moguce otvoriti datoteku!";
        exit;
    }
    $xml_string = fread($fp, 10000);
    fclose($fp);
    $doc = new DOMDocument;
    $doc->loadXML($xml_string);
    $param = $doc->getElementsByTagName('pomak');
    $sat=0;
    foreach ($param as $para){
        $sat=$para->nodeValue;
    }
    return $sat;
}
function spremi() {
    $baza = new Baza();
    $sat = dohvati();
    $upit = "UPDATE pomak SET pomak='$sat' WHERE id = '1'; ";
    if (!$baza->updateDB($upit)) {
        echo "Greska: Nije moguce izvrsiti upit!";
    }
}
    
function vrijemeV(){
    $baza = new Baza();
    $vrijeme = time();
    $upit = "SELECT pomak FROM pomak WHERE id = '1';";
    $rezultat = $baza->selectDB($upit);
    $red = $rezultat->fetch_array();
    $vritualnoVrijeme = (($red[0] * 60 * 60) + $vrijeme);
    //$vrijemeS = date('d.m.Y H:i', $vrijeme);
    //$vritualnoVrijemeS = date('d.m.Y H:i', $vritualnoVrijeme);
    return $vritualnoVrijeme;
}
?>