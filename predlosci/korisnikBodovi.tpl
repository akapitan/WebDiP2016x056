<div style="clear:both"></div>  
<br />  
<h3>Statistika korisnika</h3>
    
<div class="table-responsive">  
    <table id="IDtbl" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><a> Broj </a></th>
            <th><a href="korisnikBodovi.php?sort=datum"> Datum</a> </th>
            <th><a href="korisnikBodovi.php?sort=akcija"> Akcija </a></th>
            <th><a href="korisnikBodovi.php?sort=bodovi"> Broj bodova </a></th>
            
        </tr>
    </thead>

    <tbody>
    {foreach $data as $num => $rowinfo}
        
    <tr>
        <td>{$num +1}</td>
        {foreach $rowinfo as $key => $value}
            
            <td>{$value}</td>
        {/foreach}

        
    </tr>
    {/foreach}
 
    </tbody>
</table>
 {foreach $stranice as $nesto => $rowinfo}
        <a href="korisnikBodovi.php?stranica={$rowinfo}">{$rowinfo}</a>
        {/foreach}       
    
</div>  