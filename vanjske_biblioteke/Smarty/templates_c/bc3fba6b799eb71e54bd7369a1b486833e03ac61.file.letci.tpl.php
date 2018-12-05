<?php /* Smarty version Smarty-3.1.18, created on 2018-07-04 18:34:39
         compiled from "predlosci\letci.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16331381315a71cf01c3ad69-07441294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc3fba6b799eb71e54bd7369a1b486833e03ac61' => 
    array (
      0 => 'predlosci\\letci.tpl',
      1 => 1530719134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16331381315a71cf01c3ad69-07441294',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a71cf01c99613_61051052',
  'variables' => 
  array (
    'naslov' => 0,
    'url' => 0,
    'opis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a71cf01c99613_61051052')) {function content_5a71cf01c99613_61051052($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP2016x056\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
?><a  href="./kategorijaIndex.php/?kate=<?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
">
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
        </div>

    </article>
</a><?php }} ?>
