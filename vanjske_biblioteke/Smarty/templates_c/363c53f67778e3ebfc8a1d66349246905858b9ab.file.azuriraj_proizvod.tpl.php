<?php /* Smarty version Smarty-3.1.18, created on 2017-06-13 17:28:45
         compiled from "predlosci/azuriraj_proizvod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1056810863593f86c0cbab75-83340283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '363c53f67778e3ebfc8a1d66349246905858b9ab' => 
    array (
      0 => 'predlosci/azuriraj_proizvod.tpl',
      1 => 1497341574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1056810863593f86c0cbab75-83340283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_593f86c0d6e164_87432143',
  'variables' => 
  array (
    'azuriraj' => 0,
    'az_proizvod' => 0,
    'proizvodi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593f86c0d6e164_87432143')) {function content_593f86c0d6e164_87432143($_smarty_tpl) {?>
<section id="sadrzaj"> 
	<h2 style="text-align: center" >Unos proizvoda</h2>
	<?php if ($_smarty_tpl->tpl_vars['azuriraj']->value) {?>
	¸<form id="form1" method="post" name="form1">
		<p>
			<label for="Naziv_proizvoda">Naziv proizvoda: </label>
			<input type="text" id="Naziv_proizvoda" name="naziv_proizvoda" size="15" maxlength="15"  placeholder="Naziv proizvoda" autofocus="autofocus" <?php if ($_smarty_tpl->tpl_vars['azuriraj']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['az_proizvod']->value['naziv'];?>
"<?php }?>><br>
			
			<label for="Opis_proizvoda">Opis proizvoda: </label>
			<textarea id="textarea" name="OpisProizvoda" rows="50" cols="100" maxlength="580" placeholder="Ovdje unesite opis proizvoda"><?php if ($_smarty_tpl->tpl_vars['azuriraj']->value) {?><?php echo $_smarty_tpl->tpl_vars['az_proizvod']->value['opis'];?>
<?php }?></textarea><br>
			
			<label id ="Opis_proizvoda" for="datProizvodnje">Datum Proizvodnje: </label>
			<input type="date" id="datProizvodnje" name="datProizvodnje" required="required" <?php if ($_smarty_tpl->tpl_vars['azuriraj']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['az_proizvod']->value['datum'];?>
"<?php }?>><br>
			
			<label for="vrijemeProizvodnje">Vrijeme proizvodnje: </label>
			<input type="time" id="vrijemeProizvodnje" name="vrijemeProizvodnje" required="required" <?php if ($_smarty_tpl->tpl_vars['azuriraj']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['az_proizvod']->value['vrijeme'];?>
"<?php }?>><br>
			
			<label for="Količina">Količina: </label>
			<input type="number" id="Količina" name="kolicina" placeholder="Kolicina" required="required" min="1" <?php if ($_smarty_tpl->tpl_vars['azuriraj']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['az_proizvod']->value['kolicina'];?>
"<?php }?>><br>
			
			<label for="Težina_proizvoda">Težina proizvoda: </label>
			<input type="range" id="Težina_proizvoda" name="tezina"  min="0" max="100" value="50" <?php if ($_smarty_tpl->tpl_vars['azuriraj']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['az_proizvod']->value['tezina'];?>
"<?php }?>><br>
			
			<label for="zupanija">Županija: </label>
			<select id="zupanija" name="zupanija">
				<option value="1">Gitara</option>
				<option value="2">Bubnjevi </option>
				<option value="3">Karma </option>
			</select><br>
			
			<input id="submit1" type="submit" value=" Ažuriraj " name="azuriraj">
			<input id="reset1" type="reset" value=" Inicijaliziraj ">
		</p>    
	</form>
    <?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['azuriraj']->value) {?>
		<section id="proizvod">
			<p class = "inline-p head-p">Naziv</p>
			<p class = "inline-p head-p">Opis</p>
			<p class = "inline-p head-p">Količina</p>
			<p class = "inline-p head-p">Datum</p>
			<p class = "inline-p head-p">Ažuriraj</p>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['proizvodi']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<p class = "inline-p"><?php echo $_smarty_tpl->tpl_vars['proizvodi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['naziv'];?>
</p>
				<p class = "inline-p"><?php echo $_smarty_tpl->tpl_vars['proizvodi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['opis'];?>
</p>
				<p class = "inline-p"><?php echo $_smarty_tpl->tpl_vars['proizvodi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['kolicina'];?>
</p>
				<p class = "inline-p"><?php echo $_smarty_tpl->tpl_vars['proizvodi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['datum'];?>
</p>
				<p class = "inline-p"><a href = "azuriraj_proizvod.php?id=<?php echo $_smarty_tpl->tpl_vars['proizvodi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">Ažuriraj</a></p>
			<?php endfor; endif; ?>
		</section>
	<?php }?>
</section>
<?php }} ?>
