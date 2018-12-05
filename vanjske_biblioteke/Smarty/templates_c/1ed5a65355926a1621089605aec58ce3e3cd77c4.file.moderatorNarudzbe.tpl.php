<?php /* Smarty version Smarty-3.1.18, created on 2018-07-06 18:28:50
         compiled from "predlosci\moderatorNarudzbe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1723375005a79eb17478166-57591244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ed5a65355926a1621089605aec58ce3e3cd77c4' => 
    array (
      0 => 'predlosci\\moderatorNarudzbe.tpl',
      1 => 1530719136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1723375005a79eb17478166-57591244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a79eb174c9b87_31159350',
  'variables' => 
  array (
    'naslov' => 0,
    'opis' => 0,
    'datum' => 0,
    'kolicina' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a79eb174c9b87_31159350')) {function content_5a79eb174c9b87_31159350($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP2016x056\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
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
