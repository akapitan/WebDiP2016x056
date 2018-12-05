<?php


 function dohvatiVrijemeSesije() {
     require_once './baza.class.php';
     $baza2 = new Baza();  
     $upitSesija = 'SELECT vrijednost FROM `postavketrajanja` WHERE id = 2';
     $trajanjeSesijeArray = $baza2->selectDB($upitSesija);
     $trajanjeSesije = $trajanjeSesijeArray->fetch_array();
     $brojElemenataFinal = $trajanjeSesije['vrijednost'];
     
     //echo '<pre>'; print_r($brojElemenataFinal); echo '</pre>';
     
     return $brojElemenataFinal;
    
    
}
        

function istekSesije($vrijemeSesije){
    require_once './baza.class.php';
    require_once 'virtualnoVrijeme.php';
    $baza2 = new Baza();
    $adminZadano = dohvatiVrijemeSesije();
    
    $vrijeme = vrijemeV();
    
    if(($vrijeme - $vrijemeSesije > $adminZadano )){
        echo '<script language="javascript">';
        echo 'alert("Sesija je istekla.\nMolim da se ponovo prijavite")';
        echo '</script>';
    
        $skripta ="Korisniku " .$_SESSION['korisnicko_ime'] ." je istekla sesija"; 
        $baza2->unosDnevnik($skripta);

        session_unset();     
        session_destroy();
        return 1;
    }
    else{return 0;}

     
}


