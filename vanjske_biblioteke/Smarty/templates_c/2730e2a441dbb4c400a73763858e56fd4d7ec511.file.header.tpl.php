<?php /* Smarty version Smarty-3.1.18, created on 2017-06-02 19:08:21
         compiled from "predlosci\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29033534459319b85546609-61104035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2730e2a441dbb4c400a73763858e56fd4d7ec511' => 
    array (
      0 => 'predlosci\\header.tpl',
      1 => 1496351233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29033534459319b85546609-61104035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'korisnik' => 0,
    'tip_korisnika' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59319b85e1b0a6_40226525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59319b85e1b0a6_40226525')) {function content_59319b85e1b0a6_40226525($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Ključne riječi" content="Zadaća01">
  <meta name="Autor" content="Petra Čvrljević">
  <link rel="stylesheet" type="text/css" href="css/petcvrlje.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" src="js/petcvrlje_jquery.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
  <header>
    <div>
      <div id="header_login">
        <?php if (isset($_SESSION['email'])) {?>
        <a href="odjava.php">Odjava</a>
        <?php } else { ?>
        <a href="prijava.php">Prijava</a>
        <?php }?>
      </div>
      <div id="header_profil">
        <?php if (isset($_SESSION['email'])) {?>
        <a href="profil.php">
          <p><?php echo $_smarty_tpl->tpl_vars['korisnik']->value['ime'];?>
</p>
        </a>
        <?php }?>
      </div>
    </div>
  </header>
  <nav>
    <ul>
      <?php if (!isset($_SESSION['email'])) {?>
      <li><a href="registracija.php">Registracija</a></li>
      <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['tip_korisnika']->value==3) {?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['tip_korisnika']->value==1) {?>
        <li><a href="http://barka.foi.hr/WebDiP/pomak_vremena/vrijeme.html">Pomak</a></li>
        <li><a href="preuzmi_vrijeme.php">Virtualno vrijeme</a></li>
        <?php }?>

        <li><a href="index.php">Početna stranica</a></li>
        <li><a href="kuponi.php">Kuponi</a></li>

        <li><a href="diskusije.php">Diskusije</a></li>
        <li><a href="dnevnik.php">Dnevnik</a></li>

        <li><a href="korisnici.php">Korisnici</a></li>
      <?php }?>
      <li><a href="interesi.php">Interesi</a></li>
    </ul>
  </nav>
<?php }} ?>
