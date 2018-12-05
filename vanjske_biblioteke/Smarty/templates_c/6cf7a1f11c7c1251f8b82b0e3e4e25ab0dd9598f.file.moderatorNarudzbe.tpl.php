<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:44:34
         compiled from "predlosci/moderatorNarudzbe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3825342955a8307e21cd204-90670132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cf7a1f11c7c1251f8b82b0e3e4e25ab0dd9598f' => 
    array (
      0 => 'predlosci/moderatorNarudzbe.tpl',
      1 => 1518535185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3825342955a8307e21cd204-90670132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'naslov' => 0,
    'opis' => 0,
    'datum' => 0,
    'kolicina' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a8307e2237fd5_16401177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8307e2237fd5_16401177')) {function content_5a8307e2237fd5_16401177($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/webdip.barka.foi.hr/2016_projekti/WebDiP2016x056/vanjske_biblioteke/Smarty/libs/plugins/function.cycle.php';
?><a  >
    <article class="letak">

        <figure>
            <div class="boxTpl"  ></div> 
        </figure>

        <div style="background-color: <?php echo smarty_function_cycle(array('values'=>'#F44336, #E91E63, #673AB7, #2196F3, #009688, #FFEB3B'),$_smarty_tpl);?>
">
            <h2><?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
</p>
            <p>Datum naručivanja: <?php echo $_smarty_tpl->tpl_vars['datum']->value;?>
</p>
            <p>Količina : <?php echo $_smarty_tpl->tpl_vars['kolicina']->value;?>
</p>
            <form id="form1" method="post" name="form1" action="" enctype="multipart/form-data" >
                <label for="kod" class="label">Obradi narudžbu : </label> <br>
                <input  id="id" name="id" placeholder="kod"  style="display: none;" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Izvrši narudžbu" name="submit">
                
            </form>
        </div>
        

    </article>
</a><?php }} ?>
