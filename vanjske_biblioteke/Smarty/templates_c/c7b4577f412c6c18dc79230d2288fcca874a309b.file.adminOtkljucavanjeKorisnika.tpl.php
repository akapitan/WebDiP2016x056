<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:47:13
         compiled from "predlosci/adminOtkljucavanjeKorisnika.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13748011355a830881468b16-93494384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7b4577f412c6c18dc79230d2288fcca874a309b' => 
    array (
      0 => 'predlosci/adminOtkljucavanjeKorisnika.tpl',
      1 => 1518535184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13748011355a830881468b16-93494384',
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
  'unifunc' => 'content_5a830881508e96_64981840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a830881508e96_64981840')) {function content_5a830881508e96_64981840($_smarty_tpl) {?><div style="clear:both"></div>  
<br />  
<h3>Status korisnika</h3>
    
<div class="table-responsive">  
    <table id="adminOtkljucavanjeKorisnika" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><a href="adminOtkljucavanjeKorisnika.php?sort=id"> ID </a></th>
            <th><a href="adminOtkljucavanjeKorisnika.php?sort=korime"> Korisničko ime</a> </th>
            <th><a href="adminOtkljucavanjeKorisnika.php?sort=status"> Status </a></th>
            <th><a href="adminOtkljucavanjeKorisnika.php?sort=uloga"> Uloga </a></th>
            <th>Promjeni status</th>
            <th>Promjeni ulogu</th>
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
        <td><a href="adminOtkljucavanjeKorisnika.php?action=promjeniUlogu&id=<?php echo $_smarty_tpl->tpl_vars['rowinfo']->value["korisnik_id"];?>
&uloga=<?php echo $_smarty_tpl->tpl_vars['rowinfo']->value["uloga"];?>
">Promjeni ulogu</a></td>
    </tr>
    <?php } ?>
 
    </tbody>
</table>
    
    
</div>  <?php }} ?>
