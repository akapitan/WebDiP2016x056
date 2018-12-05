<?php
header('Content-Type: text/html; charset=utf-8');
include 'smarty.php';
include 'baza.class.php';
include 'istekSesije.php';

ob_start();
session_start();
$baza = new Baza();
$smarty = new Smarty();
$greska = "";
$ispis = "";
//$listaKorisnika = "";
if(isset($_SESSION['vrijemePostavljen'])){
    $i = istekSesije($_SESSION['vrijemePostavljen']);   
    
}

if(!isset($_SESSION['korisnicko_ime'])){
    header("Location: prijava.php");
    exit();
}
if($_SESSION['uloga']>1){
    header("Location: index_signed.php");
    exit();
}

 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "promjeniStatus")  
      {  
           $idKoisnik = $_GET["id"]; 
           $status = $_GET["status"];
           
           if($status == 'Zakljucan'){
               $upit = "UPDATE  korisnik SET status = '0' WHERE korisnik_id='$idKoisnik'";
               $baza->updateDB($upit);
               
               $skripta ="Admin - postavio je korisnika u status zakljucan "; 
               $baza->unosDnevnik($skripta);;
           }
           else if ($status == 'Otkljucan'){
               $upit = "UPDATE  korisnik SET status = '2' WHERE korisnik_id='$idKoisnik'";
               $baza->updateDB($upit);
               
               $skripta ="Admin - postavio je korisnika u status otkljucan "; 
               $baza->unosDnevnik($skripta);;
           }
      }
      //promjeniUlogu
      if($_GET["action"] == "promjeniUlogu")  
      {  
           $idKoisnik = $_GET["id"]; 
           $uloga = $_GET["uloga"];
           
           
           if($uloga == 'Moderator'){
               $upit = "UPDATE  korisnik SET uloga = '1' WHERE korisnik_id='$idKoisnik'";
               $baza->updateDB($upit);
               
               $skripta ="Admin je postavio korisnika iz statusa moderator u status admin "; 
               $baza->unosDnevnik($skripta);;
           }
           elseif ($uloga == 'Admin'){
               $upit = "UPDATE  korisnik SET uloga = '3' WHERE korisnik_id='$idKoisnik'";
               $baza->updateDB($upit);
               
               $skripta ="Admin je postavio korisnika iz statusa admin u status korisnik "; 
               $baza->unosDnevnik($skripta);;
           }
           elseif ($uloga == 'Korisnik'){
               $upit = "UPDATE  korisnik SET uloga = '2' WHERE korisnik_id='$idKoisnik'";
               $baza->updateDB($upit);
               
               $skripta ="Admin je postavio korisnika iz statusa korisnik u status moderator "; 
               $baza->unosDnevnik($skripta);;
           }
      }
 }


SmartyDirektoriji($smarty);
SmartyVarijable($smarty);

$korisnik = $_SESSION['korisnicko_ime'];
$uloga = $_SESSION['uloga'];
$smarty->assign("title" , "Postavke sustava");
$smarty->assign("korisnik" , $korisnik);
    
if($uloga == 1){$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-A-icon.png");}


$smarty->assign("prikazi", "visible");
$smarty->display('_header.tpl');
    
if($uloga == 1){
    $smarty->display('navigacija_admin.tpl');
}
$smarty->display('index.tpl');

$upit = "SELECT * FROM `postavketrajanja`";



if(isset($_GET['sort'])){
    if ($_GET['sort'] == 'id')
    {
        $upit .= " ORDER BY id";
        
    }
    elseif ($_GET['sort'] == 'naziv')
    {
        $upit .= " ORDER BY naziv";
    }
    elseif ($_GET['sort'] == 'vrijednost')
    {
        $upit .= " ORDER BY vrijednost";
    }
}


$rezultat = $baza->selectDB($upit);

while($row = mysqli_fetch_assoc($rezultat)){
  $data[] = $row;
}


if(!(isset($data))){
    $data = array();
}

$smarty->assign("data", $data);
$smarty->display('adminPostavkeSustava.tpl');
$smarty->display('_footer.tpl');
ob_end_flush();
?>