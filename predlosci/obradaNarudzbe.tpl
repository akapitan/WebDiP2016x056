<!-- href="./rezervacija.php/?narudzba={$id}"-->
<a  >
    <article class="letak">
        
        <figure>
            <div class="boxTpl"  ></div> 
        </figure>

        <div style="background-color: {cycle values='#F44336, #E91E63, #673AB7, #2196F3, #009688, #FFEB3B'}">
            <h2>{$naslov}</h2>
            <p>{$opis}</p>
            <p>Datum naručivanja: {$datum}</p>
            <p>Količina : {$kolicina}</p>
            <form id="form1" method="post" name="form1" action="">
            <label for="kod" class="label">Obradi narudžbu : </label><br><br>
            <input  id="id" name="id" placeholder="kod"  style="display: none;" value="{$id}">
            <label for="fileToUpload" class="btn">Odaberi sliku</label>
            <input type="file" name="fileToUpload" id="fileToUpload"  style="visibility:hidden;">
            <input type="submit" value=" Obradi narudžbu "></form>
        </div>

    </article>
</a>