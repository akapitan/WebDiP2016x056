<?php /* Smarty version Smarty-3.1.18, created on 2018-07-09 16:52:55
         compiled from "predlosci\adminPostavkeSustava.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18280464985b43727523bb27-38006636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f87f44944370c572b52f1fb877e7be8fd89c257' => 
    array (
      0 => 'predlosci\\adminPostavkeSustava.tpl',
      1 => 1531147975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18280464985b43727523bb27-38006636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b437275436f28_26696024',
  'variables' => 
  array (
    'data' => 0,
    'rowinfo' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b437275436f28_26696024')) {function content_5b437275436f28_26696024($_smarty_tpl) {?><div style="clear:both"></div>  
<br />  
<h3>Postavke sustava</h3>
    
<div class="table-responsive">  
    <table id="postavketrajanja" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><a href="adminStranicaZaPostavke.php?sort=id"> ID </a></th>
            <th><a href="adminStranicaZaPostavke.php?sort=naziv"> Naziv</a> </th>
            <th><a href="adminStranicaZaPostavke.php?sort=vrijednost"> Vrijednost </a></th>
            
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

    </tr>
    <?php } ?>
 
    </tbody>
</table>
    
    
</div>  <?php }} ?>
