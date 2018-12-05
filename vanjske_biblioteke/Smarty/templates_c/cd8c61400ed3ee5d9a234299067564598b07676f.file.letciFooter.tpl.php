<?php /* Smarty version Smarty-3.1.18, created on 2018-07-08 18:16:20
         compiled from "predlosci\letciFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10216694055b42364946b204-12989162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd8c61400ed3ee5d9a234299067564598b07676f' => 
    array (
      0 => 'predlosci\\letciFooter.tpl',
      1 => 1531066580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10216694055b42364946b204-12989162',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b423649660db1_46036023',
  'variables' => 
  array (
    'stranice' => 0,
    'letci' => 0,
    'rowinfo' => 0,
    'tip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b423649660db1_46036023')) {function content_5b423649660db1_46036023($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['rowinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowinfo']->_loop = false;
 $_smarty_tpl->tpl_vars['nesto'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stranice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowinfo']->key => $_smarty_tpl->tpl_vars['rowinfo']->value) {
$_smarty_tpl->tpl_vars['rowinfo']->_loop = true;
 $_smarty_tpl->tpl_vars['nesto']->value = $_smarty_tpl->tpl_vars['rowinfo']->key;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['letci']->value;?>
?stranica=<?php echo $_smarty_tpl->tpl_vars['rowinfo']->value;?>
&tip=<?php echo $_smarty_tpl->tpl_vars['tip']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rowinfo']->value;?>
</a>
        <?php } ?>  <?php }} ?>
