<?php /* Smarty version Smarty-3.1.18, created on 2018-07-09 23:05:41
         compiled from "predlosci\_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12115569e0ace255db6-66793544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa320a8c45d783bb42675e4fadb94eed6ccb63e5' => 
    array (
      0 => 'predlosci\\_header.tpl',
      1 => 1531170322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12115569e0ace255db6-66793544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_569e0ace27e0d0_70965014',
  'variables' => 
  array (
    'title' => 0,
    'prikazi' => 0,
    'uloga' => 0,
    'korisnik' => 0,
    'bodovi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569e0ace27e0d0_70965014')) {function content_569e0ace27e0d0_70965014($_smarty_tpl) {?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Zadaca_05">
        <meta name="keywords" content="HTML, CSS, FOI, WebDip, Web, Dizajn, Programiranje">
        <meta name="autor=" content="Aleksandar Kapitan">
        <link rel="stylesheet" type="text/css" href="css/akapitan.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
        <script src="js/adminStatistikaGraf.js"></script>
         
    </head>
    <body>
        <section id="header">
            
            <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1> 
            
            
            
            <form action="./odjava.php" method="post" style=" position: absolute; top: 2px; right: 0; width = 200px;    margin-bottom: 1em; display: <?php echo $_smarty_tpl->tpl_vars['prikazi']->value;?>
} ">
                
                
                <button style=" cursor: pointer; visibility:<?php echo $_smarty_tpl->tpl_vars['prikazi']->value;?>
 " id="logout" class="headerInfo" ><img src="http://cdn0.iconfinder.com/data/icons/large-glossy-icons/512/Logout.png"></button>
                
                
                <img src="<?php echo $_smarty_tpl->tpl_vars['uloga']->value;?>
" style="width: 40px;" class="headerInfo">
                
                
                <p style="display: <?php echo $_smarty_tpl->tpl_vars['prikazi']->value;?>
" class="headerInfo"><?php echo $_smarty_tpl->tpl_vars['korisnik']->value;?>
</p>
                <p style="display: <?php echo $_smarty_tpl->tpl_vars['prikazi']->value;?>
" class="headerInfo"><?php echo $_smarty_tpl->tpl_vars['bodovi']->value;?>
 bodova</p>
                
            </form>
        </section>
<?php }} ?>
