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
            <form id="form1" method="post" name="form1" action="" enctype="multipart/form-data" >
                <label for="kod" class="label">Obradi narudžbu : </label> <br>
                <input  id="id" name="id" placeholder="kod"  style="display: none;" value="{$id}">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Izvrši narudžbu" name="submit">
                
            </form>
        </div>
        

    </article>
</a>