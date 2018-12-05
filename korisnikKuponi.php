<?php
include 'smarty.php';
include 'baza.class.php';
include 'virtualnoVrijeme.php';
include 'istekSesije.php';

ob_start();
session_start();

if(isset($_SESSION['vrijemePostavljen'])){
    $i = istekSesije($_SESSION['vrijemePostavljen']);   
    
}
if(!isset($_SESSION['email'])){
	header("Location: prijava.php");
	exit();
}
//echo $_SESSION['tipKorisnika'];
    
$smarty = new Smarty();
$baza = new Baza();

if (!function_exists('array_column')) {
function array_column($input = null, $columnKey = null, $indexKey = null)
{
    $argc = func_num_args();
    $params = func_get_args();

    if ($argc < 2) {
        trigger_error("array_column() expects at least 2 parameters, {$argc} given", E_USER_WARNING);
        return null;
    }

    if (!is_array($params[0])) {
        trigger_error(
            'array_column() expects parameter 1 to be array, ' . gettype($params[0]) . ' given',
            E_USER_WARNING
        );
        return null;
    }

    if (!is_int($params[1])
        && !is_float($params[1])
        && !is_string($params[1])
        && $params[1] !== null
        && !(is_object($params[1]) && method_exists($params[1], '__toString'))
    ) {
        trigger_error('array_column(): The column key should be either a string or an integer', E_USER_WARNING);
        return false;
    }

    if (isset($params[2])
        && !is_int($params[2])
        && !is_float($params[2])
        && !is_string($params[2])
        && !(is_object($params[2]) && method_exists($params[2], '__toString'))
    ) {
        trigger_error('array_column(): The index key should be either a string or an integer', E_USER_WARNING);
        return false;
    }

    $paramsInput = $params[0];
    $paramsColumnKey = ($params[1] !== null) ? (string) $params[1] : null;

    $paramsIndexKey = null;
    if (isset($params[2])) {
        if (is_float($params[2]) || is_int($params[2])) {
            $paramsIndexKey = (int) $params[2];
        } else {
            $paramsIndexKey = (string) $params[2];
        }
    }

    $resultArray = array();

    foreach ($paramsInput as $row) {
        $key = $value = null;
        $keySet = $valueSet = false;

        if ($paramsIndexKey !== null && array_key_exists($paramsIndexKey, $row)) {
            $keySet = true;
            $key = (string) $row[$paramsIndexKey];
        }

        if ($paramsColumnKey === null) {
            $valueSet = true;
            $value = $row;
        } elseif (is_array($row) && array_key_exists($paramsColumnKey, $row)) {
            $valueSet = true;
            $value = $row[$paramsColumnKey];
        }

        if ($valueSet) {
            if ($keySet) {
                $resultArray[$key] = $value;
            } else {
                $resultArray[] = $value;
            }
        }

    }

    return $resultArray;
}

}
    
SmartyDirektoriji($smarty);
SmartyVarijable($smarty);
$greska = "";     
if(isset($_POST["dodaj"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["naziv_skriven"],  
                     'item_price'          =>     $_POST["cijena_skriven"],  
                      
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
                $_SESSION["ukupno"] = $_SESSION["ukupno"] + $_POST["cijena_skriven"];
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="korisnikKuponi.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["naziv_skriven"],  
                'item_price'          =>     $_POST["cijena_skriven"],  
                 
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
           $_SESSION["ukupno"] = $_POST["cijena_skriven"];
      }  
 }
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     $_SESSION["ukupno"] = $_SESSION["ukupno"] - $_SESSION["shopping_cart"][$keys]["item_price"];
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="korisnikKuponi.php"</script>';  
                }  
           }  
      }  
      if($_GET["action"] == "naruci"){
          if($_SESSION["bodovi"] >= $_SESSION["ukupno"]){
            $_SESSION["bodovi"] = $_SESSION["bodovi"] - $_SESSION["ukupno"];
            //echo '<pre>'; print_r($values["item_id"]); echo '</pre>';
            
            $idKorisnik = $_SESSION['id_korisnik']; 
            $korisnik = $_SESSION['korisnicko_ime'];
            $rand = substr(md5(microtime()),rand(0,26),4);
            foreach($_SESSION["shopping_cart"] as $keys => $values){
                    $kupon_id = $values["item_id"];
                    $vrijeme = vrijemeV();
                    $vrijemeF = date('Y-m-d H:i:s', $vrijeme);
                  $upit ="INSERT into korisnicki_kuponi VALUES ('$kupon_id', '$idKorisnik', '$rand','$vrijemeF', ('$vrijemeF' + INTERVAL 5 DAY))";
                  if($baza->updateDB($upit)) {
                    $brojBodova =   $_SESSION["ukupno"] * (-1);
                    
                    $baza->unosBodovi('6', $brojBodova);  
                    $skripta =" ". $korisnik . " - Korisnik je uspješno kreirao narudžbu" ; 
                    $baza->unosDnevnik($skripta);}
                    unset($_SESSION["shopping_cart"][$keys]);
                }
                
                $_SESSION["ukupno"] = 0;
                echo '<script>alert("Naručeni letci")</script>';  
                echo '<script>window.location="korisnikKuponi.php"</script>'; 
          }else {
              $korisnik = $_SESSION['korisnicko_ime'];
              echo '<script>alert("Nemate dovoljno bodova!")</script>';  
               $skripta =" ". $korisnik . " - Korisnik je pokusao napraviti narudzbu s manjkom bodova" ; 
               $baza->unosDnevnik($skripta);
          }
          
      }
 } 
    
$idKorisnik = $_SESSION['id_korisnik'];    

$korisnik = $_SESSION['korisnicko_ime'];
$uloga = $_SESSION['uloga'];
$smarty->assign("title" , "Kuponi");

$smarty->display('_header.tpl');
    
if($uloga == 1){
    $smarty->display('navigacija_korisnik.tpl');
}elseif ($uloga == 2){
    $smarty->display('navigacija_korisnik.tpl');
}elseif ($uloga == 3){
    $smarty->display('navigacija_korisnik.tpl');
}
    
$smarty->display('index.tpl');
    
$nazivKategorije2 = "";
echo "<h2 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%;'>Kuponi</h2>"."<div style='float: left; width: 82%; '>";
$vrijeme = vrijemeV();
$vrijemeF = date('Y-m-d H:i:s', $vrijeme);


$upitKolikoPoStranici = 'SELECT * FROM `postavketrajanja` WHERE id = 3';
$brojElemenataPoStraniciArray = $baza->selectDB($upitKolikoPoStranici);
$brojElemenata = $brojElemenataPoStraniciArray->fetch_array();
$brojElemenataFinal = $brojElemenata['vrijednost'];

$upit = "SELECT * FROM kuponi where datum_do >= '$vrijemeF'";
$upitCijelaStranica = $upit;  
$tabliceSadrzajSve = $baza->selectDB($upitCijelaStranica);
while($row = mysqli_fetch_assoc($tabliceSadrzajSve)){
    $dataTablice2[] = $row;
    }
    $brojRedaka = mysqli_num_rows($tabliceSadrzajSve);
    $stranica = ceil($brojRedaka/$brojElemenataFinal);
    $listaStranica = array();
    for ($i=1; $i <= $stranica;$i++){
        $listaStranica[] = $i;
    }

if(!(isset($listaStranica))){
    $listaStranica = array();
}

if(isset($_GET['stranica']) && $_GET['tip']=='kuponi'){
    $limit = (($_GET['stranica'] -1) * ($brojElemenataFinal));
    
                
    $upit .= " LIMIT $limit, $brojElemenataFinal";
}else{
        $upit .= " LIMIT 0, $brojElemenataFinal";
                
    }
$rezultat = $baza->selectDB($upit);
    
foreach ($rezultat as $value ){
    
    
    
    $title=$value["naziv"];
    $desc=$value["opis"];
    $url = $value["slika"];
    
    $id = $value["kupon_id"];
    $cijena = $value["cijena"];
    
    $datum = $value["datum_od"];
    $datum2 = $value["datum_do"];
        
        
        
        
    $smarty->assign("cijena", $cijena);  
    $smarty->assign("datum2", $datum2); 
    $smarty->assign("naslov","$title");
    $smarty->assign("opis","$desc");
    $smarty->assign("url",$url);
    $smarty->assign("id","$id");
    $smarty->assign("disable", "");
    $smarty->display("pregledKupona.tpl");
    
}
 $smarty->assign("stranice",$listaStranica);   
 $smarty->assign("letci", "korisnikKuponi.php")  ; 
 $smarty->assign("tip", "kuponi")  ; 
 
 echo "</div><h5 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%; visibility:hidden;'>Izrađeni</h5>"."<div style='float: left; max-width: none; '>";
 $smarty->display("letciFooter.tpl");


if(!isset($_SESSION["shopping_cart"])){
    $data = array();
    $ukupno = "";
    //echo '<pre>'; print_r($data); echo '</pre>';
}
else{
    $data = $_SESSION["shopping_cart"];
    $ukupno = $_SESSION["ukupno"];
}

//echo '<pre>'; print_r($data); echo '</pre>';

$smarty->assign("data", $data);
$smarty->assign("ukupno", $ukupno);
$smarty->display("kosarica.tpl");


   
echo "</div><h2 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%;'>Moji kuponi</h2>"."<div style='float: left; max-width: none; '>";

$upit2 = "SELECT * FROM `kuponi`k, korisnicki_kuponi x WHERE k.kupon_id = x.kupon AND x.korisnik = '$idKorisnik'";

$upitCijelaStranica = $upit2;  
$tabliceSadrzajSve = $baza->selectDB($upitCijelaStranica);
while($row = mysqli_fetch_assoc($tabliceSadrzajSve)){
    $dataTablice2[] = $row;
    }
    $brojRedaka = mysqli_num_rows($tabliceSadrzajSve);
    $stranica = ceil($brojRedaka/$brojElemenataFinal);
    $listaStranica = array();
    for ($i=1; $i <= $stranica;$i++){
        $listaStranica[] = $i;
    }

if(!(isset($listaStranica))){
    $listaStranica = array();
}

if(isset($_GET['stranica']) && $_GET['tip']=='mojiKuponi'){
    $limit = (($_GET['stranica'] -1) * ($brojElemenataFinal));
    
                
    $upit2 .= " LIMIT $limit, $brojElemenataFinal";
}else{
        $upit2 .= " LIMIT 0, $brojElemenataFinal";
}

$rezultat2 = $baza->selectDB($upit2);  

foreach ($rezultat2 as $value ){
    
    
    
    $title=$value["naziv"];
    $desc=$value["opis"];
    $url = $value["slika"];
    
    $id = $value["kupon_id"];
    $kod = $value["kod"];
    
    
    
    $smarty->assign('greska', $greska);
      
    
    $smarty->assign("naslov","$title");
    $smarty->assign("opis","$desc");
    $smarty->assign("url","$url");
    $smarty->assign("id","$id");
    $smarty->assign("kod","$kod");
    //$smarty->assign("disable", "");
    $smarty->display("pregledKupona2.tpl");
}
 $smarty->assign("stranice",$listaStranica);   
 $smarty->assign("letci", "korisnikKuponi.php")  ; 
 $smarty->assign("tip", "mojiKuponi")  ; 
 
 echo "</div><h5 style='margin-top: 30px; border-bottom:solid grey 2px ; float: left;width: 100%; visibility:hidden;'>Izrađeni</h5>"."<div style='float: left; max-width: none; '>";
 $smarty->display("letciFooter.tpl");    
 echo '<pre>'; print_r($upit2); echo '</pre>';

ob_end_flush();
?>