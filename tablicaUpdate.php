<?php
include 'baza.class.php';
$baza = new Baza();
session_start();

if(isset($_POST["vrijednost"]) && isset($_POST["id"]) && isset($_POST["stupac"]) && isset($_POST["tablicaID"]) &&  isset($_POST["prvi"])){
    
    $vrijednost=$_POST["vrijednost"];
    $id=$_POST["id"];
    $stupac=$_POST["stupac"];
    $tablicaID=$_POST["tablicaID"];
    $prvi = $_POST["prvi"];
    
    
    
            
    $upit = "UPDATE $tablicaID SET $stupac = '$vrijednost' WHERE $prvi='$id'";
    echo $upit;
    if($baza->updateDB($upit)){
        echo '<script>window.location="adminCRUD.php"</script>';  
        print 1;
                
        }
    
   
    
    
}

if(isset($_POST["tablicaIDUnos"])){
    $tablica = $_POST["tablicaIDUnos"];
    
    $upit = "INSERT INTO $tablica  VALUES() ";
    if($baza->updateDB($upit)){
        echo '<script>window.location="adminCRUD.php"</script>';  
        print 1;
    }
}




