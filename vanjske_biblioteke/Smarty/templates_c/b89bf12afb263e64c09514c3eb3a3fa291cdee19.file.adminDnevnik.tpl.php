<?php /* Smarty version Smarty-3.1.18, created on 2018-07-03 22:28:19
         compiled from "predlosci/adminDnevnik.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11178193415b3bdc633c8208-56630100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b89bf12afb263e64c09514c3eb3a3fa291cdee19' => 
    array (
      0 => 'predlosci/adminDnevnik.tpl',
      1 => 1518535183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11178193415b3bdc633c8208-56630100',
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
  'unifunc' => 'content_5b3bdc63442b38_72951213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3bdc63442b38_72951213')) {function content_5b3bdc63442b38_72951213($_smarty_tpl) {?><div style="clear:both"></div>  
<br />  
<h3>Dnevnik</h3>
<form>
<label for="id">id</label><input id="id" name="id">
<input type="submit" value="Pretraži">

</form>

<div class="table-responsive">  
    <table id="IDtbl" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><a href="adminDnevnik.php?sort=id"> ID </a></th>
            <th><a href="adminDnevnik.php?sort=skripta"> Skripta</a> </th>
            <th><a href="adminDnevnik.php?sort=korisnik"> Korisnik </a></th>
            <th><a href="adminDnevnik.php?sort=datum"> Datum </a></th>
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

        <td><a href="adminDnevnik.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['rowinfo']->value["id"];?>
">makni</a></td>
    </tr>
    <?php } ?>
 
    </tbody>
</table>
    
    
</div>  <?php }} ?>
