<?php /* Smarty version Smarty-3.1.18, created on 2018-07-09 21:51:01
         compiled from "predlosci\adminStatistikaGraf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3298583125a7e223578f9b0-87269312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57040cca352f79ce2fade207ca0d5acd7b30dc60' => 
    array (
      0 => 'predlosci\\adminStatistikaGraf.tpl',
      1 => 1531165855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3298583125a7e223578f9b0-87269312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a7e22357c7dc1_40147039',
  'variables' => 
  array (
    'opcijeKorisnik' => 0,
    'opcijeKorisnik2' => 0,
    'prva' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7e22357c7dc1_40147039')) {function content_5a7e22357c7dc1_40147039($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\WebDiP2016x056\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.html_options.php';
?>
<label > <span>Korisnik :  <span class="required">*</span></span> </label><?php echo smarty_function_html_options(array('name'=>"moderator",'id'=>"moderator",'options'=>$_smarty_tpl->tpl_vars['opcijeKorisnik']->value,'onchange'=>"location = this.value;"),$_smarty_tpl);?>
"
<?php echo smarty_function_html_options(array('name'=>"moderator2",'id'=>"moderator2",'options'=>$_smarty_tpl->tpl_vars['opcijeKorisnik2']->value,'selected'=>$_smarty_tpl->tpl_vars['prva']->value,'onChange'=>"CrtajGraf1(this);"),$_smarty_tpl);?>

<br><br>
<label > <span>Akcija :  <span class="required">*</span></span> </label>
<a href="adminStatistika.php?show=statAkcija"><button >Statistika po akcijama</button></a>
<button onclick="statAkcija()">Graf po akcijama</button>

<br><br>
<label > <span>Svi korisnici :  <span class="required">*</span></span> </label>
<a href="adminStatistika.php?show=statSviKorisnici"><button>Statistika svih korisnika</button></a>
<button onclick="statKorisnici()">Graf svih korisnika</button>

<br><br>
<button><a href="adminStatistika.php?printajPdf">Printaj</a></button>
<br><br>

<canvas id="piechart" width="400" height="400">
</canvas>
<script src="js/adminStatistikaGraf.js"></script>


<?php }} ?>
