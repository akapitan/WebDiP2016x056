<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:42:22
         compiled from "predlosci/letcirezervacija.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8047160875a83075ea0c2c1-72185685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd61257aa2b28d5625f70b9a935028fe4d06d58e1' => 
    array (
      0 => 'predlosci/letcirezervacija.tpl',
      1 => 1518535184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8047160875a83075ea0c2c1-72185685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'url' => 0,
    'naslov' => 0,
    'opis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a83075ea34fb3_77268530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83075ea34fb3_77268530')) {function content_5a83075ea34fb3_77268530($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/webdip.barka.foi.hr/2016_projekti/WebDiP2016x056/vanjske_biblioteke/Smarty/libs/plugins/function.cycle.php';
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
