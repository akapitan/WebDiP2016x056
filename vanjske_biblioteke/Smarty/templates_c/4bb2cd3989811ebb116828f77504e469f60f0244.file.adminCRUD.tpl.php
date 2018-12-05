<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:57:32
         compiled from "predlosci/adminCRUD.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18512576835a830aecdb3289-25498825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb2cd3989811ebb116828f77504e469f60f0244' => 
    array (
      0 => 'predlosci/adminCRUD.tpl',
      1 => 1518535183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18512576835a830aecdb3289-25498825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'naziv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a830aecdc9613_53639155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a830aecdc9613_53639155')) {function content_5a830aecdc9613_53639155($_smarty_tpl) {?>

<div class="container">
  <h4>Tablica <?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
</h4>
  
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
">Prikaži</button>
  <div id="<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
" class="collapse">
 

<?php }} ?>
