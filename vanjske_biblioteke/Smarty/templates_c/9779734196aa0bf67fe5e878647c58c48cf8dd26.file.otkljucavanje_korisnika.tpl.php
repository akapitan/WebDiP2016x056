<?php /* Smarty version Smarty-3.1.18, created on 2018-02-07 15:57:50
         compiled from "predlosci\otkljucavanje_korisnika.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9549728575a7599a8f36fa8-48750920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9779734196aa0bf67fe5e878647c58c48cf8dd26' => 
    array (
      0 => 'predlosci\\otkljucavanje_korisnika.tpl',
      1 => 1518015469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9549728575a7599a8f36fa8-48750920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a7599a90b1a70_96677917',
  'variables' => 
  array (
    'data' => 0,
    'rowinfo' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7599a90b1a70_96677917')) {function content_5a7599a90b1a70_96677917($_smarty_tpl) {?><div style="clear:both"></div>  
<br />  
<h3>Status korisnika</h3>
    
<div class="table-responsive">  
    <table id="IDtbl" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th> ID </th>
            <th> Korisničko ime </th>
            <th> Status </th>
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

        <td><a href="adminOtkljucavanjeKorisnika.php?action=promjeniStatus&id=<?php echo $_smarty_tpl->tpl_vars['rowinfo']->value["korisnik_id"];?>
&status=<?php echo $_smarty_tpl->tpl_vars['rowinfo']->value["status"];?>
">Promjeni status</a></td>
    </tr>
    <?php } ?>
 
    </tbody>
</table>
    
    
</div>  <?php }} ?>
