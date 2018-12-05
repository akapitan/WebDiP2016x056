<?php /* Smarty version Smarty-3.1.18, created on 2018-07-04 18:18:50
         compiled from "predlosci\prijava.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28041569e0ad4cc54a0-68591108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136c573d2fbe5fb4ba8f17a4078ad67bc4e6dfeb' => 
    array (
      0 => 'predlosci\\prijava.tpl',
      1 => 1530719133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28041569e0ad4cc54a0-68591108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_569e0ad4cf4236_46960824',
  'variables' => 
  array (
    'greska' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569e0ad4cf4236_46960824')) {function content_569e0ad4cf4236_46960824($_smarty_tpl) {?><section class="sadrzaj"> 
	<h5 style="visibility:hidden">samo za validaciju</h5>
	<?php echo $_smarty_tpl->tpl_vars['greska']->value;?>

	<form id="form1" method="post" name="form1">
		<p>
			<label for="korime" class="label">Korisničko ime: </label>
			<input type="text" id="korime" name="korime" size="15" maxlength="15" placeholder="korisničko ime" autofocus="autofocus" class="input"><br>
			<label for="lozinka" class="label">Lozinka: </label>
			<input type="password" id="lozinka" name="lozinka" size="15" maxlength="15" placeholder="lozinka" class="input"><br>
                        <label for="kod" class="label">Jedinstveni kod: </label>
                        <input type="text" id="kod" name="kod" placeholder="kod"  class="input" >
			<input type="checkbox" name="zapamti_me" value="1" > Upamti korisničko ime<br>
			<input type="submit" value=" Prijavi se ">
			<input type="reset" value=" Inicijaliziraj " > 
		</p>
                
                <p>
                    <a href="./nova_lozinka.php">Zaboravljena lozinka?</a>
                </p>
                
		<p>Admin: akapitan</p>
		<p>ADmin1</p><br>
		<p>Moderator: Moderator</p>
		<p>MOderator1</p><br>
		<p>Obicni: Korisnik</p>
		<p>KOrisnik</p><br>
		
	</form>
   
</section>
<?php }} ?>
