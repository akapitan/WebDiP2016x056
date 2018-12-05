<?php /* Smarty version Smarty-3.1.18, created on 2018-02-09 13:04:12
         compiled from "predlosci\adminCrudTablicaKategorija.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2885980525a7d8d2c590192-96291941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f544da6372a119fb433bc6bbd99088b9a58e0e7' => 
    array (
      0 => 'predlosci\\adminCrudTablicaKategorija.tpl',
      1 => 1518177852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2885980525a7d8d2c590192-96291941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a7d8d2c5e0da5_95594041',
  'variables' => 
  array (
    'naziv' => 0,
    'tablicaID' => 0,
    'data' => 0,
    'rowinfo' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7d8d2c5e0da5_95594041')) {function content_5a7d8d2c5e0da5_95594041($_smarty_tpl) {?><div style="clear:both"></div>  
<br />  
<h3>tablica : <?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
</h3>

<div class="table-responsive">  
    <table id="<?php echo $_smarty_tpl->tpl_vars['tablicaID']->value;?>
" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><a href="adminCRUD.php?sort=id">ID</a></th>
            <th><a href="adminCRUD.php?sort=akcija">Naziv</a> </th>
            <th><a href="adminCRUD.php?sort=vrijednost">Opis</a></th>
            <th><a href="adminCRUD.php?sort=vrijednost">Slika</a></th>
            <th><a href="adminCRUD.php?sort=vrijednost">Datum od</a></th>
            <th><a href="adminCRUD.php?sort=vrijednost">Nauceni</a></th>
            <th>Ukloni</th>
            <th><button id="gumbDodaj" onclick="dodajRed()"> Dodaj novi</button>    </th>
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

        <td><a href="adminCRUD.php?action=delete&tablica=adminAkcija&id=<?php echo $_smarty_tpl->tpl_vars['rowinfo']->value["akcija_id"];?>
">Ukloni</a></td>
    </tr>
    <?php } ?>
 
    </tbody>
</table>
    
    
</div>  
<?php }} ?>
