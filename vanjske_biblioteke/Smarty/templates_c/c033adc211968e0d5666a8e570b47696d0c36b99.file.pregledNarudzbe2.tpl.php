<?php /* Smarty version Smarty-3.1.18, created on 2018-07-06 22:24:50
         compiled from "predlosci\pregledNarudzbe2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1433874845a789a1362c466-62841211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c033adc211968e0d5666a8e570b47696d0c36b99' => 
    array (
      0 => 'predlosci\\pregledNarudzbe2.tpl',
      1 => 1530719135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1433874845a789a1362c466-62841211',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a789a136a0a67_40429503',
  'variables' => 
  array (
    'id' => 0,
    'greska' => 0,
    'url' => 0,
    'naslov' => 0,
    'opis' => 0,
    'datum' => 0,
    'datum_do' => 0,
    'kolicina' => 0,
    'podjeljeni' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a789a136a0a67_40429503')) {function content_5a789a136a0a67_40429503($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP2016x056\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
?><!-- href="./rezervacija.php/?narudzba=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"-->
<a  >
    <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>

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
            <p>Datum naručivanja: <?php echo $_smarty_tpl->tpl_vars['datum']->value;?>
</p>
            <p>Datum izradnje: <?php echo $_smarty_tpl->tpl_vars['datum_do']->value;?>
</p>
            <p>Količina : <?php echo $_smarty_tpl->tpl_vars['kolicina']->value;?>
</p>
            <p>Zauzeto: <?php echo $_smarty_tpl->tpl_vars['podjeljeni']->value;?>
</p>
            <form id="form1" method="post" name="form1" action="">
            <label for="kod" class="label">Rezerviraj : </label>
            <input  id="id" name="id" placeholder="kod"  style="display: none;" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            <input type="number" id="kod" name="kod" placeholder="kod"  class="input" min="0">
            <input type="submit" value=" Rezerviraj "></form>
            
        </div>
        
    </article>
</a><?php }} ?>
