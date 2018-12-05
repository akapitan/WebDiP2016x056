<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:22:24
         compiled from "predlosci/_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145698497591187bb8d3588-01485872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cae68bd330d676cf8d60c66177191a20373ba9a' => 
    array (
      0 => 'predlosci/_header.tpl',
      1 => 1518535186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145698497591187bb8d3588-01485872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_591187bb916455_87923869',
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
<?php if ($_valid && !is_callable('content_591187bb916455_87923869')) {function content_591187bb916455_87923869($_smarty_tpl) {?><html>
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
            
            
            
            <form action="./odjava.php" method="post" style=" position: absolute; top: 2px; right: 0;     margin-bottom: 1em; display: <?php echo $_smarty_tpl->tpl_vars['prikazi']->value;?>
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
</p>
            </form>
        </section>
<?php }} ?>
