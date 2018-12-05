<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:57:32
         compiled from "predlosci/adminCrudTablica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18116584895a830aecdcd959-87651921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b32ce99e3e7674a6b9dbc4c494028dae8e4af5b1' => 
    array (
      0 => 'predlosci/adminCrudTablica.tpl',
      1 => 1518535183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18116584895a830aecdcd959-87651921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'naziv' => 0,
    'tablicaID' => 0,
    'data' => 0,
    'rowinfo' => 0,
    'value' => 0,
    'bla' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a830aece588d2_65238703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a830aece588d2_65238703')) {function content_5a830aece588d2_65238703($_smarty_tpl) {?><div style="clear:both"></div>  
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
            <th><button class="gumbDodaj" onclick="dodajRed()"> Dodaj novi</button>    </th>
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

        <td><a href="adminCRUD.php?action=delete&tablica=<?php echo $_smarty_tpl->tpl_vars['tablicaID']->value;?>
&id=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bla']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['rowinfo']->value[$_tmp1];?>
">Ukloni</a></td>
    </tr>
    <?php } ?>
 
    </tbody>
</table>
    
    
</div>  
<?php }} ?>
