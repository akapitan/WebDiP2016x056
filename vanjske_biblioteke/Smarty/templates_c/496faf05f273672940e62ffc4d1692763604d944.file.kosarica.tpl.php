<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:42:32
         compiled from "predlosci/kosarica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15212167325a830768759a26-14830320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '496faf05f273672940e62ffc4d1692763604d944' => 
    array (
      0 => 'predlosci/kosarica.tpl',
      1 => 1518535184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15212167325a830768759a26-14830320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'rowinfo' => 0,
    'value' => 0,
    'ukupno' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a8307687928f1_80293451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8307687928f1_80293451')) {function content_5a8307687928f1_80293451($_smarty_tpl) {?><div style="clear:both"></div>  
<br />  
<h3>Košarica</h3>
    
<div class="table-responsive">  
    <table id="IDtbl" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th> ID </th>
            <th> Naziv </th>
            <th> Cijena </th>
            <th>Ukloni</th>
        </tr>
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

        <td><a href="korisnikKuponi.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['rowinfo']->value['item_id'];?>
">Remove</a></td>
    </tr>
    <?php } ?>
    <tr>  
        <td colspan="3" align="right"></td>  
        <td align="right">Ukupno: <?php echo $_smarty_tpl->tpl_vars['ukupno']->value;?>
 </td>  
        <td><a href="korisnikKuponi.php?action=naruci">Naruci</a></td>  
    </tr> 
    </tbody>
</table>
    
    
</div>  <?php }} ?>
