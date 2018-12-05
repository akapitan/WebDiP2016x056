var trenutni ="";
var vrijednost;
var id;
var tablicaID;
var stupac;
var prvi;
$(document).ready(function(){
    $("td").click(function () {
        trenutni = this;
        
        //id redak
        id = $(this).parent().find("td:first").html();
        
        vrijednost = $(this).html();
        //tablica id
        tablicaID = $(this).closest('table').attr('id');
        //kolona
        $th = $(this).closest('tbody').prev('thead').find('> tr > th:eq(' + $(this).index() + ')').find("a:first").html();
        $th2 = $(this).closest('tbody').prev('thead').find('> tr > th:eq(' + $(this).index() + ')').html();
        stupac =$th;
        
        
        
        var $thUkloni = $(this).closest('tbody').prev('thead').find('> tr > th:eq(' + $(this).index() + ')').html();
        //prvi = $("th:first").find("a:first").html();
        $first = $(this).closest('tbody').prev('thead').find("tr:first").find("th:first").find("a:first").html();
        prvi = $first;
        
        var $forma = $("<div id ='forma' ><input id='unosID' value = "+ vrijednost +">\n\
                        <button id='save' onclick='spremi()' value='Spremi'>Spremi\n\
                        </button><button id='odustani' onclick='odustani()'>Odustani</button>\n\
                        </div>");
        if($thUkloni != "Promjeni status" && $thUkloni != "Promjeni ulogu" && $thUkloni != "ID" && $th2 != "Ukloni"){
            $(this).after($forma);
        }
        
        
        
        
        
    });
});
function odustani() {
    $("#forma").remove();
    
}


function spremi() {
    
    vrijednost = $("#unosID").val();
    if(stupac == 'Korisničko ime'){
        stupac = 'korisnicko_ime';
        prvi = 'korisnik_id';
    }

    
    
    
    
    $.ajax({
        type: 'POST',
        url: 'tablicaUpdate.php',
        data: {vrijednost: vrijednost, id: id, stupac: stupac, tablicaID: tablicaID, prvi:prvi},
        success: function (data) {
            
            if(data){
                $("#forma").remove();
                $(trenutni).html(vrijednost);
                
            }
            
            
        }
    });
}
$(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();


$(document).ready(function(){
    $(".gumbDodaj").click(function () {
        
        
        
        //tablica id
        tablicaID = $(this).closest('table').attr('id');
        //alert(tablicaID);
        
        $.ajax({
            type: 'POST',
            url: 'tablicaUpdate.php',
            data: {tablicaIDUnos: tablicaID},
            success: function (data) {
                
                if(data){
                    alert("Svje je prošlo dobro");
                    
                }
                
                
            }
        });
        
        
    });
});
 