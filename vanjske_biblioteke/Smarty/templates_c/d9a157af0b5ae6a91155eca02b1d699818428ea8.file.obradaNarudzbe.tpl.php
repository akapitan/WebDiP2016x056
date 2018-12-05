<?php /* Smarty version Smarty-3.1.18, created on 2018-02-06 18:33:38
         compiled from "predlosci\obradaNarudzbe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10592458895a79ce2e467756-06924970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9a157af0b5ae6a91155eca02b1d699818428ea8' => 
    array (
      0 => 'predlosci\\obradaNarudzbe.tpl',
      1 => 1517938414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10592458895a79ce2e467756-06924970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a79ce2e4c9e95_78803685',
  'variables' => 
  array (
    'id' => 0,
    'naslov' => 0,
    'opis' => 0,
    'datum' => 0,
    'kolicina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a79ce2e4c9e95_78803685')) {function content_5a79ce2e4c9e95_78803685($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP_projekt\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
?><!-- href="./rezervacija.php/?narudzba=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"-->
<a  >
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
            <form id="form1" method="post" name="form1" action="">
            <label for="kod" class="label">Obradi narudžbu : </label><br><br>
            <input  id="id" name="id" placeholder="kod"  style="display: none;" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            <label for="fileToUpload" class="btn">Odaberi sliku</label>
            <input type="file" name="fileToUpload" id="fileToUpload"  style="visibility:hidden;">
            <input type="submit" value=" Obradi narudžbu "></form>
        </div>

    </article>
</a><?php }} ?>
