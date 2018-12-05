<?php /* Smarty version Smarty-3.1.18, created on 2018-02-09 13:59:35
         compiled from "predlosci\adminCrudTablicaAkcija.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13485896045a7d6fa3e3db13-29388946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38ea3dcebb68cdadd1ed1c82da9a2d524c7d9138' => 
    array (
      0 => 'predlosci\\adminCrudTablicaAkcija.tpl',
      1 => 1518181175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13485896045a7d6fa3e3db13-29388946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a7d6fa3e9a962_68162092',
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
<?php if ($_valid && !is_callable('content_5a7d6fa3e9a962_68162092')) {function content_5a7d6fa3e9a962_68162092($_smarty_tpl) {?><div style="clear:both"></div>  
<br />  
<h3>tablica : <?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
</h3>

<div class="table-responsive">  
    <table id="<?php echo $_smarty_tpl->tpl_vars['tablicaID']->value;?>
" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <?php  $_smarty_tpl->tpl_vars['rowinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowinfo']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['rowinfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['rowinfo']->key => $_smarty_tpl->tpl_vars['rowinfo']->value) {
$_smarty_tpl->tpl_vars['rowinfo']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['rowinfo']->key;
 $_smarty_tpl->tpl_vars['rowinfo']->index++;
 $_smarty_tpl->tpl_vars['rowinfo']->first = $_smarty_tpl->tpl_vars['rowinfo']->index === 0;
?>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rowinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['rowinfo']->first) {?>
                    <th><a href="adminCRUD.php?tablica=<?php echo $_smarty_tpl->tpl_vars['tablicaID']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['value']->key;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
</a></th>
                <?php }?>
            <?php } ?>
        <?php } ?>
            <th>Ukloni</th>
            <th><button id="gumbDodaj" onclick="dodajRed()"> Dodaj novi</button>    </th>
        </tr>
    </thead>

    <tbody>
    <?php  $_smarty_tpl->tpl_vars['rowinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowinfo']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['rowinfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['rowinfo']->key => $_smarty_tpl->tpl_vars['rowinfo']->value) {
$_smarty_tpl->tpl_vars['rowinfo']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['rowinfo']->key;
 $_smarty_tpl->tpl_vars['rowinfo']->index++;
 $_smarty_tpl->tpl_vars['rowinfo']->first = $_smarty_tpl->tpl_vars['rowinfo']->index === 0;
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
