   <?php
        // put your code here
        class Baza{
            const server = "localhost";
            /*const baza ="WebDiP2016x056";
            const korisnik ="WebDiP2016x056";
            const lozinka = "admin_IHeN";*/
            const baza = "mydb";
            const korisnik ="root";
            const lozinka = "";
            
           private function spojiDB(){
                $mysqli=new mysqli(self::server, self::korisnik, self::lozinka,self::baza); 
                $mysqli->set_charset('utf8');
                if($mysqli->connect_errno) {
                            echo"Neuspješno spajanje na bazu:". $mysqli->connect_errno .",".$mysqli->connect_error;
                            
                        }
                        return $mysqli;
            }
            function zatvoriVezuDB($veza){
                  $uspjelo= mysqli_close($veza);
                  return $uspjelo;
            }
            
            function selectDB($upit){
                            $veza = self::spojiDB();
                            $rezultat = $veza->query($upit) or trigger_error("Greskica kod upita:($upit)-" //trigger izvještava o pogreški 
                            . "Greška" . $veza->error . " " . E_USER_ERROR);
                            if(!$rezultat){ //ak rezultat nema ni jedan red
                                 $rezultat=null;
                            }
                            self::zatvoriVezuDB($veza);
                            return $rezultat;
                     }
           function updateDB($upit, $skripta="") //skripta je opcionalan parametar (deklarirao se sa ="")
                {
                    $veza = self::spojiDB();
                    $rezultat = $veza->query($upit); //za select vraća sam objekt a za ostale (INSERT/UPDATE/DELETE) true/false
                    if($rezultat){ 
                       self::zatvoriVezuDB($veza);
                        if($skripta != ""){
                           header("Location: $skripta"); //preusmjerava lokaciju na adresu "skripta"
                        }
                        return $rezultat;
                    }
                    else {
                        //echo "Pogreška :" .$veza->error;
                       self::zatvoriVezuDB($veza);
                        return $rezultat;
                    }
                 }
                 function preuzmiVrijeme(){
                        $vrijeme = time();
                        $upit = "SELECT pomak FROM pomak WHERE id = '1';";
                        $rezultat = self::selectDB($upit);
                        $red = $rezultat->fetch_array();
                        $vritualnoVrijeme2 = (($red[0] * 60 * 60) + $vrijeme);
                        $vrijemeFF = date('Y-m-d H:i:s', $vritualnoVrijeme2);
                        return $vrijemeFF;



                    }

            function unosDnevnik($skripta){
                
                if(isset($_SESSION["korisnicko_ime"])){
                    $korisnik = $_SESSION["korisnicko_ime"];
                    $vrijeme = self::preuzmiVrijeme();
                    $upit= "INSERT INTO dnevnik  values (DEFAULT ,'$skripta','$korisnik','$vrijeme')";
                    $true = self::updateDB($upit);
                    //echo $true;
                    
                }
                else{
                    $vrijeme = self::preuzmiVrijeme();
                    $upit= "INSERT INTO dnevnik  values (DEFAULT ,'$skripta','neprijavljen korisnik','$vrijeme')";
                    $true = self::updateDB($upit);
                    //echo $true;
                }
                
                
                
                    
            }
            function unosBodovi($akcija, $brojBodova){
                
                if(isset($_SESSION["korisnicko_ime"])){
                    $korisnik = $_SESSION["id_korisnik"];
                    $vrijeme = self::preuzmiVrijeme();
                    $upit= "INSERT INTO log_bodovi  values (DEFAULT ,'$korisnik','$akcija','$vrijeme','$brojBodova' )";
                    $true = self::updateDB($upit);
                    echo $true;
                    
                }
                
                
                
                    
            }
            function unosBodoviReg($akcija, $brojBodova, $korisnik){
                
                
                    $vrijeme = self::preuzmiVrijeme();
                    $upit= "INSERT INTO log_bodovi  values (DEFAULT ,'$korisnik','$akcija','$vrijeme','$brojBodova' )";
                    $true = self::updateDB($upit);
                    echo $true;
                    
                
                
                
                
                    
            }
           
            
}
   ?>
