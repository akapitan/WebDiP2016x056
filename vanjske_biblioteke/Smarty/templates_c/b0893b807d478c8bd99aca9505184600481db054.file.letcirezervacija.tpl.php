<?php /* Smarty version Smarty-3.1.18, created on 2018-07-06 11:13:18
         compiled from "predlosci\letcirezervacija.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8826886735a82006e0506b1-74089186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0893b807d478c8bd99aca9505184600481db054' => 
    array (
      0 => 'predlosci\\letcirezervacija.tpl',
      1 => 1530719135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8826886735a82006e0506b1-74089186',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a82006e0a7bf2_25960851',
  'variables' => 
  array (
    'id' => 0,
    'url' => 0,
    'naslov' => 0,
    'opis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a82006e0a7bf2_25960851')) {function content_5a82006e0a7bf2_25960851($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP2016x056\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
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
