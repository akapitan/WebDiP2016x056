<?php /* Smarty version Smarty-3.1.18, created on 2018-02-12 21:21:21
         compiled from "predlosci\dnevnik.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6930343575a81f7418a52a2-24874381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6685e6d124362559037341cfa06b9415d6f0b332' => 
    array (
      0 => 'predlosci\\dnevnik.tpl',
      1 => 1517403204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6930343575a81f7418a52a2-24874381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dnevnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a81f7418f8ff0_16611775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a81f7418f8ff0_16611775')) {function content_5a81f7418f8ff0_16611775($_smarty_tpl) {?>
<section id="sadrzaj"> 
	<h2 style="text-align: center" >Dnevnik</h2>
	<section class = "dnevnik">
		<p class = "inline-p head-p">Korisnik</p>
		<p class = "inline-p head-p">Datum</p>
		<p class = "inline-p head-p">Vrijeme</p>
		<p class = "inline-p head-p">Proizvod</p>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dnevnik']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<p class = "inline-p"><?php echo $_smarty_tpl->tpl_vars['dnevnik']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['korisnik'];?>
</p>
			<p class = "inline-p"><?php echo $_smarty_tpl->tpl_vars['dnevnik']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['datum'];?>
</p>
			<p class = "inline-p"><?php echo $_smarty_tpl->tpl_vars['dnevnik']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['vrijeme'];?>
</p>
			<p class = "inline-p"><?php echo $_smarty_tpl->tpl_vars['dnevnik']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['proizvod'];?>
</p>
		<?php endfor; endif; ?>
	</section>
</section>
<?php }} ?>
