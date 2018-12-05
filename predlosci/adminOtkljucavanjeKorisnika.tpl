<div style="clear:both"></div>  
<br />  
<h3>Status korisnika</h3>
    
<div class="table-responsive">  
    <table id="korisnik" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><a href="adminOtkljucavanjeKorisnika.php?sort=id"> ID </a></th>
            <th id ="korisnicko_ime"><a href="adminOtkljucavanjeKorisnika.php?sort=korime">Korisničko ime</a> </th>
            <th><a href="adminOtkljucavanjeKorisnika.php?sort=status"> Status </a></th>
            <th><a href="adminOtkljucavanjeKorisnika.php?sort=uloga"> Uloga </a></th>
            <th>Promjeni status</th>
            <th>Promjeni ulogu</th>
        </tr>
    </thead>

    <tbody>
    {foreach $data as $num => $rowinfo}
        
    <tr>
        {foreach $rowinfo as $key => $value}
            
            <td>{$value}</td>
        {/foreach}

        <td><a href="adminOtkljucavanjeKorisnika.php?action=promjeniStatus&id={$rowinfo["korisnik_id"]}&status={$rowinfo["status"]}">Promjeni status</a></td>
        <td><a href="adminOtkljucavanjeKorisnika.php?action=promjeniUlogu&id={$rowinfo["korisnik_id"]}&uloga={$rowinfo["uloga"]}">Promjeni ulogu</a></td>
    </tr>
    {/foreach}
 
    </tbody>
</table>
    
    
</div>  