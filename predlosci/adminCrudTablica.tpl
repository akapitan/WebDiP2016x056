<div style="clear:both"></div>  
<br />  
<h3>tablica : {$naziv}</h3>

<form action="" method="get">
<input type="text" name="pretrazi" id="pretrazivanjeID" ></input>
<input type="text" name="tablica" id="pretrazivanjeTablica" value="{$tablicaID}" style="display:none"></input>
<input type="submit"  value="Pretraži"></input>
</form>
<div style="display:{$displayRaspon}">
    <form action="" method="get">
    <input type="date" id="start" name="tablicaOD" value="2018-07-07" min="2016-01-01" max="2020-01-01" />
    <input type="date" id="to" name="tablicaDO" value="2018-07-07" min="2016-01-01" max="2020-01-01" />
    <input type="text" name="tablica" id="pretrazivanjeTablica" value="{$tablicaID}" style="display:none"></input>
    <input type="submit"  value="Pretraži"></input>
    </form>
</div>
<div class="table-responsive">  
    <table id="{$tablicaID}" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            {foreach $data as $num => $rowinfo}
                {foreach $rowinfo as $key => $value}
                    {if $rowinfo@first}
                        <th><a href="adminCRUD.php?tablica={$tablicaID}&sort={$value@key}">{$value@key}</a></th>
                    {/if}
                {/foreach}
        {/foreach}
            <th>Ukloni</th>
            <th><button class="gumbDodaj" onclick="dodajRed()"> Dodaj novi</button>    </th>
        </tr>
    </thead>

    <tbody>
    {foreach $data as $num => $rowinfo}
       
    <tr>
        {foreach $rowinfo as $key => $value}
            
            <td>{$value}</td>
        {/foreach}

        <td><a href="adminCRUD.php?action=delete&tablica={$tablicaID}&id={$rowinfo[{$index}]}">Ukloni</a></td>
    </tr>
    {/foreach}
 
    </tbody>
    
</table>
    {foreach $stranice as $nesto => $rowinfo}
        <a href="adminCrud.php?tablica={$tablicaID}&stranica={$rowinfo}">{$rowinfo}</a>
        {/foreach}
</div>  
 