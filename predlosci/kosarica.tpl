<div style="clear:both"></div>  
<br />  
<h3>Košarica</h3>
    
<div class="table-responsive">  
    <table id="IDtbl" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th> ID </th>
            <th> Naziv </th>
            <th> Cijena </th>
            <th>Ukloni</th>
        </tr>
    </thead>

    <tbody>
    {foreach $data as $num => $rowinfo}
    <tr>
        
        {foreach $rowinfo as $key => $value}
            
            <td>{$value}</td>
        {/foreach}

        <td><a href="korisnikKuponi.php?action=delete&id={$rowinfo['item_id']}">Remove</a></td>
    </tr>
    {/foreach}
    <tr>  
        <td colspan="3" align="right"></td>  
        <td align="right">Ukupno: {$ukupno} </td>  
        <td><a href="korisnikKuponi.php?action=naruci">Naruci</a></td>  
    </tr> 
    </tbody>
</table>
    
    
</div>  