<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 18:29:24
         compiled from "predlosci\pregledNarudzbe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1783011875a784413741a73-60709459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '038f23ad378e070cdad6bbbd906b4dee23e4d635' => 
    array (
      0 => 'predlosci\\pregledNarudzbe.tpl',
      1 => 1530719135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1783011875a784413741a73-60709459',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a78441379ac65_96194167',
  'variables' => 
  array (
    'id' => 0,
    'naslov' => 0,
    'opis' => 0,
    'datum' => 0,
    'kolicina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78441379ac65_96194167')) {function content_5a78441379ac65_96194167($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP2016x056\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
?><!-- href="./rezervacija.php/?narudzba=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"-->
<a  >
    <article class="letak">

        <figure>
            <div class="boxTpl"  ></div> 
        </figure>

        <div style="background-color: <?php echo smarty_function_cycle(array('values'=>'#F44336, #E91E63, #673AB7, #2196F3, #009688, #FFEB3B'),$_smarty_tpl);?>
">
            <h2><?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
</p>
            <p>Datum naručivanja: <?php echo $_smarty_tpl->tpl_vars['datum']->value;?>
</p>
            <p>Količina : <?php echo $_smarty_tpl->tpl_vars['kolicina']->value;?>
</p>
        </div>

    </article>
</a><?php }} ?>
