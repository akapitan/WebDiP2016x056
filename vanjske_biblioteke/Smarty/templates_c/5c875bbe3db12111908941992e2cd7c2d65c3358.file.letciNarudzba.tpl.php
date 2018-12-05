<?php /* Smarty version Smarty-3.1.18, created on 2018-02-05 10:02:04
         compiled from "predlosci\letciNarudzba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233539285a781d8ca6dbc4-55047793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c875bbe3db12111908941992e2cd7c2d65c3358' => 
    array (
      0 => 'predlosci\\letciNarudzba.tpl',
      1 => 1517820903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233539285a781d8ca6dbc4-55047793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'letak_id' => 0,
    'url' => 0,
    'naslov' => 0,
    'opis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a781d8cacce49_39886909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a781d8cacce49_39886909')) {function content_5a781d8cacce49_39886909($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP_projekt\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
?><a  href="./rezervacija.php/?id=<?php echo $_smarty_tpl->tpl_vars['letak_id']->value;?>
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
