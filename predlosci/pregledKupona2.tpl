<script language="javascript">
function PrintElem(elem)
{
    
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');

    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
   
    mywindow.document.write('</head><body >');
    mywindow.document.write('<style type="text/css"> @media print { body { background-color: black;  } }</style>');
    mywindow.document.write('<h1>' + document.title  + '</h1>');
    mywindow.document.write(document.getElementById(elem).innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();

    return true;
}
</script>
<a id="print" >
    <article class="letak">

        <figure>
            <img class="boxTpl"  src="{$url}" alt="Mountain View">  
        </figure>

        <div style="background-color: {cycle values='#F44336, #E91E63, #673AB7, #2196F3, #009688, #FFEB3B'}">
            <h2>{$naslov}</h2>
            <p>{$opis}</p>
            <p>kod: {$kod}</p>
            <input name="b_print" type="button" class="ipt"   onClick="PrintElem('print');" value=" Ispis ">

            
        </div>

    </article>
</a>