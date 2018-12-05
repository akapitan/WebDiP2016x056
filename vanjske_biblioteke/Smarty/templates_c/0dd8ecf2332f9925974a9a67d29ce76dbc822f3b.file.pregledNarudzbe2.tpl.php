<?php /* Smarty version Smarty-3.1.18, created on 2018-02-05 16:06:44
         compiled from "pregledNarudzbe2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14754268865a7858869382e5-00255155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dd8ecf2332f9925974a9a67d29ce76dbc822f3b' => 
    array (
      0 => 'pregledNarudzbe2.tpl',
      1 => 1517843204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14754268865a7858869382e5-00255155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a7858869981b3_62946715',
  'variables' => 
  array (
    'id' => 0,
    'url' => 0,
    'naslov' => 0,
    'opis' => 0,
    'datum' => 0,
    'kolicina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7858869981b3_62946715')) {function content_5a7858869981b3_62946715($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP_projekt\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
?><!-- href="./rezervacija.php/?narudzba=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"-->
<a  >
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
            <p>Datum naručivanja: <?php echo $_smarty_tpl->tpl_vars['datum']->value;?>
</p>
            <p>Datum izradnje: </p>
            <p>Količina : <?php echo $_smarty_tpl->tpl_vars['kolicina']->value;?>
</p>
            <p>Zauzeto: </p>
            <form id="form1" method="post" name="form1" action="">
            <label for="kod" class="label">Rezerviraj : </label>
            
            <input type="number" id="kod" name="kod" placeholder="kod"  class="input" min="0">
            <input type="submit" value=" Rezerviraj "></form>
            
        </div>
        
    </article>
</a><?php }} ?>
