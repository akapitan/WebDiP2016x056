<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:46:39
         compiled from "predlosci/adminStatistika.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5238557385a83085f3c95b9-86809122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1147d8cc73d83732c51ee4134bf02fddb095aa63' => 
    array (
      0 => 'predlosci/adminStatistika.tpl',
      1 => 1518535184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5238557385a83085f3c95b9-86809122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'rowinfo' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a83085f433cc5_67820683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83085f433cc5_67820683')) {function content_5a83085f433cc5_67820683($_smarty_tpl) {?><div style="clear:both"></div>  
<br />  
<h3>Statistika korisnika</h3>
    
<div class="table-responsive">  
    <table id="adminStatistika" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><a href="adminStatistika.php?sort=id"> ID </a></th>
            <th><a href="adminStatistika.php?sort=korime"> Korisnik</a> </th>

            <th><a href="adminStatistika.php?sort=uBodovi"> Ukupno bodova </a></th>
            <th>Ukloni</th>
        <
    </thead>

    <tbody>
    <?php  $_smarty_tpl->tpl_vars['rowinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowinfo']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowinfo']->key => $_smarty_tpl->tpl_vars['rowinfo']->value) {
$_smarty_tpl->tpl_vars['rowinfo']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['rowinfo']->key;
?>
        
    <tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rowinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
            
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
        <?php } ?>

       
    </tr>
    <?php } ?>
 
    </tbody>
</table>
    
    
</div>  
<?php }} ?>
