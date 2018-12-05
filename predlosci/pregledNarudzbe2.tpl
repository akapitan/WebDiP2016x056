<!-- href="./rezervacija.php/?narudzba={$id}"-->
<a  >
    {$greska}
    <article class="letak">
        
        <figure>
            <img class="boxTpl"  src="{$url}" alt="Mountain View"> 
        </figure>
            
        <div style="background-color: {cycle values='#F44336, #E91E63, #673AB7, #2196F3, #009688, #FFEB3B'}">
            <h2>{$naslov}</h2>
            <p>{$opis}</p>
            <p>Datum naručivanja: {$datum}</p>
            <p>Datum izradnje: {$datum_do}</p>
            <p>Količina : {$kolicina}</p>
            <p>Zauzeto: {$podjeljeni}</p>
            <form id="form1" method="post" name="form1" action="">
            <label for="kod" class="label">Rezerviraj : </label>
            <input  id="id" name="id" placeholder="kod"  style="display: none;" value="{$id}">
            <input type="number" id="kod" name="kod" placeholder="kod"  class="input" min="0">
            <input type="submit" value=" Rezerviraj "></form>
            
        </div>
        
    </article>
</a>