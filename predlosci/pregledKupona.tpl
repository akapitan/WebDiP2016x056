<!-- href="./rezervacija.php/?narudzba={$id}"-->
<a  >
    <article class="letak">

        <figure>
            <img class="boxTpl"  src="{$url}" alt="Mountain View">  
        </figure>

        <div style="background-color: {cycle values='#F44336, #E91E63, #673AB7, #2196F3, #009688, #FFEB3B'}">
            <form method="post" action="korisnikKuponi.php?action=add&id={$id}"> 
                <h2>{$naslov}</h2><input type="hidden" name="naziv_skriven" value="{$naslov}" />  
                <p>{$opis}</p>
                <p>Vrijedi do: {$datum2}</p>
                <p>Cijena: {$cijena}</p><input type="hidden" name="cijena_skriven" value="{$cijena}" />  
                <input type="submit" name="dodaj" id="dodaj" style="margin-top:5px;" class="btn btn-success" value="Dodaj u košaricu" /> 
            </form>
            
        </div>

    </article>
</a>
                
