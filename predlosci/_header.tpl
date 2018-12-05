<html>
    <head>
        <title>{$title}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Zadaca_05">
        <meta name="keywords" content="HTML, CSS, FOI, WebDip, Web, Dizajn, Programiranje">
        <meta name="autor=" content="Aleksandar Kapitan">
        <link rel="stylesheet" type="text/css" href="css/akapitan.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
        <script src="js/adminStatistikaGraf.js"></script>
         
    </head>
    <body>
        <section id="header">
            
            <h1>{$title}</h1> 
            
            
            
            <form action="./odjava.php" method="post" style=" position: absolute; top: 2px; right: 0; width = 200px;    margin-bottom: 1em; display: {$prikazi}} ">
                
                
                <button style=" cursor: pointer; visibility:{$prikazi} " id="logout" class="headerInfo" ><img src="http://cdn0.iconfinder.com/data/icons/large-glossy-icons/512/Logout.png"></button>
                
                
                <img src="{$uloga}" style="width: 40px;" class="headerInfo">
                
                
                <p style="display: {$prikazi}" class="headerInfo">{$korisnik}</p>
                <p style="display: {$prikazi}" class="headerInfo">{$bodovi} bodova</p>
                
            </form>
        </section>
