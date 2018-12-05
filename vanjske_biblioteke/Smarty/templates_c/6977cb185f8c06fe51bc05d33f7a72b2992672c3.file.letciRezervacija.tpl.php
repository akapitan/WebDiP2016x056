<?php /* Smarty version Smarty-3.1.18, created on 2018-02-05 12:41:32
         compiled from "predlosci\letciRezervacija.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12796459185a780f312915d1-40897737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6977cb185f8c06fe51bc05d33f7a72b2992672c3' => 
    array (
      0 => 'predlosci\\letciRezervacija.tpl',
      1 => 1517830892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12796459185a780f312915d1-40897737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a780f312fa6c0_58522995',
  'variables' => 
  array (
    'id' => 0,
    'url' => 0,
    'naslov' => 0,
    'opis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a780f312fa6c0_58522995')) {function content_5a780f312fa6c0_58522995($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP_projekt\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
?><a  href="./rezervacija.php/?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <article class="letak">

        <figure>
            <img class="boxTpl"  src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" alt="Mountain View"> 
        </figure>

        <div style="background-color: <?php echo smarty_function_cycle(array('values'=>'#F44336, #E91E63, #673AB7, #2196F3, #009688, #FFEB3B'),$_smarty_tpl);?>
">
            <h2><?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
</p>
        </div>

    </article>
</a><?php }} ?>
