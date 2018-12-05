<?php /* Smarty version Smarty-3.1.18, created on 2018-07-06 18:28:50
         compiled from "predlosci\gotoviLetci.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69917285a79f8a70df137-79426634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b13a13e81850df96ba1d1cb531790b2748a2b8a6' => 
    array (
      0 => 'predlosci\\gotoviLetci.tpl',
      1 => 1530719134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69917285a79f8a70df137-79426634',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a79f8a71293a7_32657654',
  'variables' => 
  array (
    'url' => 0,
    'naslov' => 0,
    'opis' => 0,
    'datum2' => 0,
    'dana' => 0,
    'sati' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a79f8a71293a7_32657654')) {function content_5a79f8a71293a7_32657654($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP2016x056\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
?><a>
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
            <p>Obrađen: <?php echo $_smarty_tpl->tpl_vars['datum2']->value;?>
</p>
            <p>Vrijeme potrebno za izradu: </p>
            <p><?php echo $_smarty_tpl->tpl_vars['dana']->value;?>
 dana, <?php echo $_smarty_tpl->tpl_vars['sati']->value;?>
 sati.</p>
        </div>

    </article>
</a><?php }} ?>
