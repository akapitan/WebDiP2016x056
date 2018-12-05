<?php /* Smarty version Smarty-3.1.18, created on 2017-06-13 17:59:59
         compiled from "predlosci/otkljucavanje_korisnika.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1209015649593f8e0d3919b9-25987686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b47c077bc80a408c0003ebcdcbd3607c202d767' => 
    array (
      0 => 'predlosci/otkljucavanje_korisnika.tpl',
      1 => 1497341578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1209015649593f8e0d3919b9-25987686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_593f8e0d410fb7_45465934',
  'variables' => 
  array (
    'listaKorisnika' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593f8e0d410fb7_45465934')) {function content_593f8e0d410fb7_45465934($_smarty_tpl) {?>
<section id="sadrzaj"> 
	<h2 style="text-align: center" >Dnevnik</h2>
	<section id="korisnici">
		<p class = "inline-p head-p">Ime</p>
		<p class = "inline-p head-p">Prezime</p>
		<p class = "inline-p head-p">Korisnicko ime</p>
		<p class = "inline-p head-p"></p>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listaKorisnika']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
			<p class = "inline-p"><?php echo $_smarty_tpl->tpl_vars['listaKorisnika']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ime'];?>
</p>
			<p class = "inline-p"><?php echo $_smarty_tpl->tpl_vars['listaKorisnika']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['prezime'];?>
</p>
			<p class = "inline-p"><?php echo $_smarty_tpl->tpl_vars['listaKorisnika']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['korisnickoIme'];?>
</p>
			<p class = "inline-p"><a href="otkljucavanje_korisnika.php?korisnickoIme=<?php echo $_smarty_tpl->tpl_vars['listaKorisnika']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['korisnickoIme'];?>
">Otključaj korisnika</a></p>
		<?php endfor; endif; ?>
	</section>
</section>
<?php }} ?>
