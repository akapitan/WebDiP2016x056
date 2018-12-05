<div style="clear:both"></div>  
<br />  
<h3>Postavke sustava</h3>
    
<div class="table-responsive">  
    <table id="postavketrajanja" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><a href="adminStranicaZaPostavke.php?sort=id"> ID </a></th>
            <th><a href="adminStranicaZaPostavke.php?sort=naziv"> Naziv</a> </th>
            <th><a href="adminStranicaZaPostavke.php?sort=vrijednost"> Vrijednost </a></th>
            
        </tr>
    </thead>

    <tbody>
    {foreach $data as $num => $rowinfo}
        
    <tr>
        {foreach $rowinfo as $key => $value}
            
            <td>{$value}</td>
        {/foreach}

    </tr>
    {/foreach}
 
    </tbody>
</table>
    
    
</div>  