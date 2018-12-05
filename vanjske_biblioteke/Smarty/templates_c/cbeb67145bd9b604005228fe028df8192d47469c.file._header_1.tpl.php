<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:57:32
         compiled from "predlosci/_header_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:602287995a830aecd11168-08569990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbeb67145bd9b604005228fe028df8192d47469c' => 
    array (
      0 => 'predlosci/_header_1.tpl',
      1 => 1518535186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '602287995a830aecd11168-08569990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'prikazi' => 0,
    'uloga' => 0,
    'korisnik' => 0,
    'bodovi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a830aecd9e8b7_88193360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a830aecd9e8b7_88193360')) {function content_5a830aecd9e8b7_88193360($_smarty_tpl) {?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Zadaca_05">
        <meta name="keywords" content="HTML, CSS, FOI, WebDip, Web, Dizajn, Programiranje">
        <meta name="autor=" content="Aleksandar Kapitan">
        <link rel="stylesheet" type="text/css" href="css/akapitan.css" media="all">
        <script type="text/javascript" src="js/tablicaUpdate.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
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
