<?php /* Smarty version Smarty-3.1.18, created on 2018-07-06 14:44:54
         compiled from "predlosci\adminCRUD.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10135401015a7ccfc56cc9c5-38826234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c4b409e71056a7f5ef8c686af19b49ca0a6b3f0' => 
    array (
      0 => 'predlosci\\adminCRUD.tpl',
      1 => 1530881093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10135401015a7ccfc56cc9c5-38826234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a7ccfc5716282_98474699',
  'variables' => 
  array (
    'naziv' => 0,
    'collapse' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ccfc5716282_98474699')) {function content_5a7ccfc5716282_98474699($_smarty_tpl) {?>

<div class="container">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
">Prikaži tablicu <?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
</button>
  <div id="<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
" class=<?php echo $_smarty_tpl->tpl_vars['collapse']->value;?>
>
 

<?php }} ?>
