<div style="clear:both"></div>  
<br />  
<h3>Dnevnik</h3>
<form>
<label for="id">id</label><input id="id" name="pretrazi">
<input type="submit" value="Pretraži">

</form>

<div class="table-responsive">  
    <table id="IDtbl" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><a href="adminDnevnik.php?sort=id"> ID </a></th>
            <th><a href="adminDnevnik.php?sort=skripta"> Skripta</a> </th>
            <th><a href="adminDnevnik.php?sort=korisnik"> Korisnik </a></th>
            <th><a href="adminDnevnik.php?sort=datum"> Datum </a></th>
            <th>Ukloni</th>
        </tr>
    </thead>

    <tbody>
    {foreach $data as $num => $rowinfo}
     
    <tr>
        {foreach $rowinfo as $key => $value}
            
            <td>{$value}</td>
        {/foreach}

        <td><a href="adminDnevnik.php?action=delete&id={$rowinfo["id"]}">makni</a></td>
    </tr>
    {/foreach}
 
    </tbody>
        
</table>
 {foreach $stranice as $nesto => $rowinfo}
        <a href="adminDnevnik.php?tablica=dnevnik&stranica={$rowinfo}">{$rowinfo}</a>
        {/foreach}   
    
</div>  