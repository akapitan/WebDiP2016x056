<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:22:24
         compiled from "predlosci/letci.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2684990625a8302b02f1b47-11104897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c1efa17d8c0eefe8fca4582f047c8b3b35cd874' => 
    array (
      0 => 'predlosci/letci.tpl',
      1 => 1518535184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2684990625a8302b02f1b47-11104897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'naslov' => 0,
    'url' => 0,
    'opis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a8302b0316df9_99161595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8302b0316df9_99161595')) {function content_5a8302b0316df9_99161595($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/webdip.barka.foi.hr/2016_projekti/WebDiP2016x056/vanjske_biblioteke/Smarty/libs/plugins/function.cycle.php';
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
