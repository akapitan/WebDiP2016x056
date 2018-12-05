<?php /* Smarty version Smarty-3.1.18, created on 2018-07-07 18:23:46
         compiled from "predlosci\adminCrudTablica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13753431485a7cdb4c59d4d7-14671801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40083951b0c46b2f8268d338a15923373d57bc5a' => 
    array (
      0 => 'predlosci\\adminCrudTablica.tpl',
      1 => 1530980621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13753431485a7cdb4c59d4d7-14671801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a7cdb4c5f41f9_07386374',
  'variables' => 
  array (
    'naziv' => 0,
    'tablicaID' => 0,
    'displayRaspon' => 0,
    'data' => 0,
    'rowinfo' => 0,
    'value' => 0,
    'index' => 0,
    'stranice' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7cdb4c5f41f9_07386374')) {function content_5a7cdb4c5f41f9_07386374($_smarty_tpl) {?><div style="clear:both"></div>  
<br />  
<h3>tablica : <?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
</h3>

<form action="" method="get">
<input type="text" name="pretrazi" id="pretrazivanjeID" ></input>
<input type="text" name="tablica" id="pretrazivanjeTablica" value="<?php echo $_smarty_tpl->tpl_vars['tablicaID']->value;?>
" style="display:none"></input>
<input type="submit"  value="Pretraži"></input>
</form>
<div style="display:<?php echo $_smarty_tpl->tpl_vars['displayRaspon']->value;?>
">
    <form action="" method="get">
    <input type="date" id="start" name="tablicaOD" value="2018-07-07" min="2016-01-01" max="2020-01-01" />
    <input type="date" id="to" name="tablicaDO" value="2018-07-07" min="2016-01-01" max="2020-01-01" />
    <input type="text" name="tablica" id="pretrazivanjeTablica" value="<?php echo $_smarty_tpl->tpl_vars['tablicaID']->value;?>
" style="display:none"></input>
    <input type="submit"  value="Pretraži"></input>
    </form>
</div>
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
&id=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['rowinfo']->value[$_tmp1];?>
">Ukloni</a></td>
    </tr>
    <?php } ?>
 
    </tbody>
    
</table>
    <?php  $_smarty_tpl->tpl_vars['rowinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowinfo']->_loop = false;
 $_smarty_tpl->tpl_vars['nesto'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stranice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['rowinfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['rowinfo']->key => $_smarty_tpl->tpl_vars['rowinfo']->value) {
$_smarty_tpl->tpl_vars['rowinfo']->_loop = true;
 $_smarty_tpl->tpl_vars['nesto']->value = $_smarty_tpl->tpl_vars['rowinfo']->key;
 $_smarty_tpl->tpl_vars['rowinfo']->index++;
 $_smarty_tpl->tpl_vars['rowinfo']->first = $_smarty_tpl->tpl_vars['rowinfo']->index === 0;
?>
        <a href="adminCrud.php?tablica=<?php echo $_smarty_tpl->tpl_vars['tablicaID']->value;?>
&stranica=<?php echo $_smarty_tpl->tpl_vars['rowinfo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rowinfo']->value;?>
</a>
        <?php } ?>
</div>  
 <?php }} ?>
