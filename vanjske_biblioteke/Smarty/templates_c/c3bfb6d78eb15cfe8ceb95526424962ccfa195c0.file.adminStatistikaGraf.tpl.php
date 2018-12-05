<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:46:39
         compiled from "predlosci/adminStatistikaGraf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13673874645a83085f43a7c5-95499505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3bfb6d78eb15cfe8ceb95526424962ccfa195c0' => 
    array (
      0 => 'predlosci/adminStatistikaGraf.tpl',
      1 => 1518535184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13673874645a83085f43a7c5-95499505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opcijeKorisnik' => 0,
    'prva' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a83085f457c89_59922597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83085f457c89_59922597')) {function content_5a83085f457c89_59922597($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/webdip.barka.foi.hr/2016_projekti/WebDiP2016x056/vanjske_biblioteke/Smarty/libs/plugins/function.html_options.php';
?>
<label > <span>Korisnik :  <span class="required">*</span></span> </label><?php echo smarty_function_html_options(array('name'=>"moderator",'id'=>"moderator",'options'=>$_smarty_tpl->tpl_vars['opcijeKorisnik']->value,'selected'=>$_smarty_tpl->tpl_vars['prva']->value,'onChange'=>"CrtajGraf1(this);"),$_smarty_tpl);?>

<br><br>
<label > <span>Akcija :  <span class="required">*</span></span> </label>
<button onclick="statAkcija()">Statistika po akcijama</button>

<br><br>
<label > <span>Svi korisnici :  <span class="required">*</span></span> </label>
<button onclick="statKorisnici()">Statistika svih korisnika</button>
<br><br>
<button><a href="adminStatistika.php?printajPdf">Printaj</a></button>
<br><br>
    
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<?php }} ?>
