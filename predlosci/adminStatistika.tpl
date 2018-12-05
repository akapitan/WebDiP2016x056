<div style="clear:both"></div>  
<br />  
<h3>Statistika korisnika</h3>
    
<div class="table-responsive">  
    <table id="adminStatistika" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            {foreach $data as $num => $rowinfo}
                {foreach $rowinfo as $key => $value}
                    {if $rowinfo@first}
                        <script>
                            var url =window.location.href;
                            document.write("<th><a href='" + url + "&sort={$value@key}'>{$value@key}</a></th>");
                        </script>
                        
                    {/if}
                {/foreach}
        {/foreach}
            <script>
                            var url =window.location.href;
                            document.write("<th><a href='" + url + "&print'>printaj</a></th>");
                        </script>
            
            
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
