var forma = document.getElementById('form1');
var span = document.getElementsByTagName('span');

function prikaziPoruku(id, poruka, element) {
    document.getElementById(element).className = 'neispravno';
    span[id].innerHTML = poruka;
    span[id].className = '';
    if(element === 'ime'){
        document.getElementById("imeL").innerHTML = "Ime:  <strong id='red'>!</strong>"; 
    }
    
    if(element === 'prez'){
        document.getElementById("prezL").innerHTML = "Prezime <strong id='red'>!</strong>"; 
    }
    if(element === 'email'){
        document.getElementById("emailL").innerHTML = "Email <strong id='red'>!</strong>"; 
    }
    if(element === 'korime'){
        document.getElementById("korimeL").innerHTML = "Korisničko ime <strong id='red'>!</strong>"; 
    }
    if(element === 'lozinka1'){
        document.getElementById("lozinka1L").innerHTML = "Lozinka : <strong id='red'>!</strong>"; 
        document.getElementById("lozinka2L").innerHTML = "Ponovljena lozinka: <strong id='red'>!</strong>"; 
    }
    
}
function uspjesno(id, element) {
    document.getElementById(element).className = 'ispravno';
    span[id].innerHTML = "";
    span[id].className = '';
    if(element === 'ime'){
        document.getElementById("imeL").innerHTML = "Ime: ";  
    }
    if(element === 'prez'){
        document.getElementById("prezL").innerHTML = "Prezime"; 
    }
    if(element === 'email'){
        document.getElementById("emailL").innerHTML = "Email"; 
    }
    if(element === 'korime'){
        document.getElementById("korimeL").innerHTML = "Korisničko ime"; 
    }
    if(element === 'lozinka1'){
        document.getElementById("lozinka1L").innerHTML = "Lozinka"; 
        document.getElementById("lozinka2L").innerHTML = "Ponovljena lozinka:"; 
    }
    
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

if (forma) {
    document.getElementById('ime').addEventListener("keyup", function () {
        var ime = document.getElementById("ime").value;
            
        var slovo = ime.substring(0, 1);
            
        span[0].innerHTML = "";
        span[0].className = '';
        var sve = true;
            
        if (ime.length !== 0) {
            if (ime.length < 3) {
                prikaziPoruku(0, " Upišite barem 3 slova.", 'ime');
                sve = false;
            }
            if (slovo === slovo.toLowerCase() ) {
                prikaziPoruku(0, "Prvo slovo mora biti Veliko.", 'ime');
                sve = false;
            }


        } else {
            prikaziPoruku(0, " Upišite svoje ime", 'ime');
            sve = false;
        }
            
        if (sve) {
            uspjesno(0, 'ime');
            provjera = true;
        } else {
            provjera = false;
        }
    });
    document.getElementById('prez').addEventListener("keyup", function () {
        var prez = document.getElementById("prez").value;
        var slovo = prez.substring(0, 1);
        
        
        span[1].innerHTML = "";
        span[1].className = '';
        var sve = true;
       
        
            
        if (prez.length !== 0) {
            if (prez.length < 4) {
                prikaziPoruku(1, " Upišite barem 4 slova.", 'prez');
                sve = false;
            }
            if (slovo === slovo.toLowerCase() ) {
                prikaziPoruku(1, "Prvo slovo mora biti Veliko.", 'prez');
                sve = false;
            }


        } else {
            prikaziPoruku(1, " Upišite svoje prezime", 'prez');
            sve = false;
        }
        
        
        if (sve) {
            uspjesno(1, 'prez');
            provjera = true;
        } else {
            provjera = false;
        }
    });
    document.getElementById('email').addEventListener("keyup", function () {
        
        var email = document.getElementById("email").value;
        
        span[2].innerHTML = "";
        span[2].className = '';
        var sveMail = true;
        
        if (email.length !== 0) {
            
            if (validateEmail(email)){
                
                uspjesno(2, 'email');
                ajaxProvjeraEmail();
                
            }
            else{
                prikaziPoruku(2, "email mora biti tipa: ime.prezime@posluzitelj.xxx", 'email');
                sveMail = false;
            }
        }else{
            prikaziPoruku(2, "Unesi email", 'email');
                sveMail = false;
        }
        if (sveMail) {
            uspjesno(2, 'email');
            provjera = true;
        } else {
            provjera = false;
        }
    });
    document.getElementById('korime').addEventListener("keyup", function () {
        
        var korime = document.getElementById("korime").value;
        
        span[3].innerHTML = "";
        span[3].className = '';
        var sve = true;
        
        if (korime.length !== 0 && korime.length < 3) {
            prikaziPoruku(3, "Korisničko ime treba imati barem 3 slova", 'korime');
            sve = false;
            
        }else if(korime.length == 0){
            prikaziPoruku(3, "Unesi korisničko ime", 'korime');
            sve = false;
        }
        if (sve) {
            uspjesno(3, 'korime');
            ajaxProvjeraKorisnicko();
            provjera = true;
        } else {
            provjera = false;
        }
    });
    
   
}
function ajaxProvjeraKorisnicko(){
$(document).ready(function() {
    $('#korime').blur(function(){
        var korimee = $('#korime').val();
        $.ajax({
            type: 'POST',
            url: 'ServerCheck.php',
            data: {korime:korimee},
            success: function (data) {
                if (data == 1) {
                    prikaziPoruku(3, "Korisničko ime je zauzeto", 'korime');;
                    $(this).select();
                    $('#submit1').attr("disabled", true);
                    
                }
                else {
                    
                    $('#submit1').removeAttr("disabled");
                }
            }

        });
    });

});
}
function ajaxProvjeraEmail(){
$(document).ready(function() {
    $('#email').blur(function(){
        var emaill = $('#email').val();
        $.ajax({
            type: 'POST',
            url: 'ServerCheck.php',
            data: {email:emaill},
            success: function (data) {
                if (data == 1) {
                    prikaziPoruku(2, "Email  je zauzet", 'email');;
                    $(this).select();
                    $('#submit1').attr("disabled", true);
                    
                }
                else {
                    uspjesno(2, 'email');
                    $('#submit1').removeAttr("disabled");
                }
            }

        });
    });

});
}
