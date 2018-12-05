
var colors = ["#FFDAB9", "#E6E6FA", "#E0FFFF" ,"#cc0033", "#ffcc66", "#0C0"];

var result = [];
var result2 = [];
var final = [];


function drawSegment(canvas, context, i) {
    context.save();
    var centerX = Math.floor(canvas.width / 2);
    var centerY = Math.floor(canvas.height / 2);
    radius = Math.floor(canvas.width / 2);

    var startingAngle = degreesToRadians(sumTo(result, i));
    var abs = Math.abs(result[i]);
    var arcSize = degreesToRadians(abs);
    var endingAngle = startingAngle + arcSize;

    context.beginPath();
    context.moveTo(centerX, centerY);
    context.arc(centerX, centerY, radius, 
                startingAngle, endingAngle, false);
    context.closePath();

    context.fillStyle = colors[i];
    context.fill();

    context.restore();

    drawSegmentLabel(canvas, context, i);
}
function degreesToRadians(degrees) {
    return (degrees * Math.PI)/180;
}
function sumTo(a, i) {
    var sum = 0;
    for (var j = 0; j < i; j++) {
      sum += a[j];
    }
    return sum;
}

function drawSegmentLabel(canvas, context, i) {
   context.save();
   var x = Math.floor(canvas.width / 2);
   var y = Math.floor(canvas.height / 2);
   var angle = degreesToRadians(sumTo(result, i));

   context.translate(x, y);
   context.rotate(angle);
   var dx = Math.floor(canvas.width * 0.5) - 10;
   var dy = Math.floor(canvas.height * 0.05);

   context.textAlign = "right";
   var fontSize = Math.floor(canvas.height / 25);
   context.font = fontSize + "pt Helvetica";

   context.fillText(result2[i], dx, dy);

   context.restore();
}
function crtaj(){
    alert(result);
            alert(result2);
    canvas = document.getElementById("piechart");
    var context = canvas.getContext("2d");
    for (var i = 0; i < result.length; i++) {
        drawSegment(canvas, context, i);
    }
}


function CrtajGraf1(sel){
    
    //alert(sel.options[sel.selectedIndex].text);
    var odabir = sel.options[sel.selectedIndex].value;
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {OdabirS: odabir},
        dataType: "json", 
        success: function(data){
            //alert(JSON.stringify(data));
            final = [];
            for (i in data)
            {
                
                result[i]= (data[i]["SUM(l.ukupno_bodova)"]);
                result2[i] =data[i]["opis"];
                
                
                
                
            }
            
        crtaj();   
        }
    });
    
}


function statAkcija(){
    
    
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {OdabirSS: "odabir"},
        dataType: "json", 
        success: function(data){
            //alert(JSON.stringify(data));
            final = [];
            for (i in data)
            {
                
                result[i]= (data[i]["sum(l.ukupno_bodova)"]);
                result2[i] =data[i]["opis"];
                
                
                
            }
            
            crtaj();
        }
    });
    
}
//statKorisnici
function statKorisnici(){
   
    
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {OdabirSSS: "odabir"},
        dataType: "json", 
        success: function(data){
            
            final = [];
            for (i in data)
            {
                
                result[i]= (data[i]["sum(l.ukupno_bodova)"]);
                result2[i] =data[i]["korisnicko_ime"];
                
                
                
                
            }
            
            crtaj();
        }
    });
} 