<?php /* Smarty version Smarty-3.1.18, created on 2018-07-10 10:08:34
         compiled from "predlosci\pregledKupona2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14893088675a7a36927753c7-70997576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca91cbc4d0a331e918177cb75c26889f78940158' => 
    array (
      0 => 'predlosci\\pregledKupona2.tpl',
      1 => 1531210114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14893088675a7a36927753c7-70997576',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a7a36927c7a44_04492679',
  'variables' => 
  array (
    'url' => 0,
    'naslov' => 0,
    'opis' => 0,
    'kod' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7a36927c7a44_04492679')) {function content_5a7a36927c7a44_04492679($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP2016x056\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
?><script language="javascript">
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
            <img class="boxTpl"  src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" alt="Mountain View">  
        </figure>

        <div style="background-color: <?php echo smarty_function_cycle(array('values'=>'#F44336, #E91E63, #673AB7, #2196F3, #009688, #FFEB3B'),$_smarty_tpl);?>
">
            <h2><?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
</p>
            <p>kod: <?php echo $_smarty_tpl->tpl_vars['kod']->value;?>
</p>
            <input name="b_print" type="button" class="ipt"   onClick="PrintElem('print');" value=" Ispis ">

            
        </div>

    </article>
</a><?php }} ?>
