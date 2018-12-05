<?php /* Smarty version Smarty-3.1.18, created on 2017-06-13 17:10:17
         compiled from "predlosci/novi_proizvod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1401212539593f8a059f1a72-30537974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca42bf0d11aefb1b8e9aeb3354f51d8f0355ff18' => 
    array (
      0 => 'predlosci/novi_proizvod.tpl',
      1 => 1497341578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1401212539593f8a059f1a72-30537974',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_593f8a05ac2676_84041844',
  'variables' => 
  array (
    'greskaNaziv' => 0,
    'proslo' => 0,
    'greskaOpis' => 0,
    'greskaDatum' => 0,
    'greskaVrijeme' => 0,
    'greskaKolicina' => 0,
    'greskaTezina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593f8a05ac2676_84041844')) {function content_593f8a05ac2676_84041844($_smarty_tpl) {?>
<section id="sadrzaj"> 
	<h2 style="text-align: center" >Unos proizvoda</h2>
	¸<form id="form1" method="post" name="form1">
		<p>
			<label for="Naziv_proizvoda">Naziv proizvoda: <?php if ($_smarty_tpl->tpl_vars['greskaNaziv']->value!='') {?><span id="usklicnik">!</span><?php }?></label>
			<input type="text" id="Naziv_proizvoda" name="naziv_proizvoda" size="15" maxlength="15"  placeholder="Naziv proizvoda" autofocus="autofocus" <?php if ($_smarty_tpl->tpl_vars['proslo']->value) {?>disabled="disabled"<?php }?>><br>
			
			<label for="Opis_proizvoda">Opis proizvoda: </label>
			<textarea id="textarea" name="OpisProizvoda" rows="50" cols="100" maxlength="580" placeholder="Ovdje unesite opis proizvoda" <?php if ($_smarty_tpl->tpl_vars['proslo']->value) {?>disabled="disabled"<?php }?>> <?php if ($_smarty_tpl->tpl_vars['greskaOpis']->value!='') {?><span id="usklicnik">!</span><?php }?></textarea><br>
			
			<label id ="Opis_proizvoda" for="datProizvodnje">Datum Proizvodnje:  <?php if ($_smarty_tpl->tpl_vars['greskaDatum']->value!='') {?><span id="usklicnik">!</span><?php }?></label>
			<input type="text" id="datProizvodnje" name="datProizvodnje"  <?php if ($_smarty_tpl->tpl_vars['proslo']->value) {?>disabled="disabled"<?php }?>><br>
			
			<label for="vrijemeProizvodnje">Vrijeme proizvodnje:  <?php if ($_smarty_tpl->tpl_vars['greskaVrijeme']->value!='') {?><span id="usklicnik">!</span><?php }?></label>
			<input type="time" id="vrijemeProizvodnje" name="vrijemeProizvodnje" <?php if ($_smarty_tpl->tpl_vars['proslo']->value) {?>disabled="disabled"<?php }?>><br>
			
			<label for="Količina">Količina:  <?php if ($_smarty_tpl->tpl_vars['greskaKolicina']->value!='') {?><span id="usklicnik">!</span><?php }?></label>
			<input type="number" id="Količina" name="kolicina" placeholder="Kolicina"  min="1" <?php if ($_smarty_tpl->tpl_vars['proslo']->value) {?>disabled="disabled"<?php }?>><br>
			
			<label for="Težina_proizvoda">Težina proizvoda:  <?php if ($_smarty_tpl->tpl_vars['greskaTezina']->value!='') {?><span id="usklicnik">!</span><?php }?></label>
			<input type="range" id="Težina_proizvoda" name="tezina"  min="0" max="100" value="50" <?php if ($_smarty_tpl->tpl_vars['proslo']->value) {?>disabled="disabled"<?php }?>><br>
			
			<label for="zupanija">Županija:  </label>
			<select id="zupanija" name="zupanija" <?php if ($_smarty_tpl->tpl_vars['proslo']->value) {?>disabled="disabled"<?php }?>>
				<option value="1" selected="selected">Gitara</option>
				<option value="2">Bubnjevi </option>
				<option value="3">Karma </option>
			</select><br>
			
			<input id="submit1" type="submit" value=" Unesi ">
			<input id="reset1" type="reset" value=" Inicijaliziraj ">
		</p>    
	</form>
</section>
<?php }} ?>
