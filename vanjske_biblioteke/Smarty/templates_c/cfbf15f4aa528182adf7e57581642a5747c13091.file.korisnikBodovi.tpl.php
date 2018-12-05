<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:42:26
         compiled from "predlosci/korisnikBodovi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20895531275a830762bc32c9-65363054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfbf15f4aa528182adf7e57581642a5747c13091' => 
    array (
      0 => 'predlosci/korisnikBodovi.tpl',
      1 => 1518535184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20895531275a830762bc32c9-65363054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'num' => 0,
    'rowinfo' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a830762c33a04_85201050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a830762c33a04_85201050')) {function content_5a830762c33a04_85201050($_smarty_tpl) {?><div style="clear:both"></div>  
<br />  
<h3>Statistika korisnika</h3>
    
<div class="table-responsive">  
    <table id="IDtbl" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><a> Broj </a></th>
            <th><a href="korisnikBodovi.php?sort=datum"> Datum</a> </th>
            <th><a href="korisnikBodovi.php?sort=akcija"> Akcija </a></th>
            <th><a href="korisnikBodovi.php?sort=bodovi"> Broj bodova </a></th>
            
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
        <td><?php echo $_smarty_tpl->tpl_vars['num']->value+1;?>
</td>
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
