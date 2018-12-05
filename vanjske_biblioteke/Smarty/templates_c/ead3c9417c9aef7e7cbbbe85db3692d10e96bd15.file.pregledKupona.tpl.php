<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:42:32
         compiled from "predlosci/pregledKupona.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7118890465a8307686c1b51-89157526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ead3c9417c9aef7e7cbbbe85db3692d10e96bd15' => 
    array (
      0 => 'predlosci/pregledKupona.tpl',
      1 => 1518535185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7118890465a8307686c1b51-89157526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'url' => 0,
    'naslov' => 0,
    'opis' => 0,
    'datum2' => 0,
    'cijena' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a830768750eb2_06272625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a830768750eb2_06272625')) {function content_5a830768750eb2_06272625($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/webdip.barka.foi.hr/2016_projekti/WebDiP2016x056/vanjske_biblioteke/Smarty/libs/plugins/function.cycle.php';
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
            <form method="post" action="korisnikKuponi.php?action=add&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> 
                <h2><?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
</h2><input type="hidden" name="naziv_skriven" value="<?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
" />  
                <p><?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
</p>
                <p>Vrijedi do: <?php echo $_smarty_tpl->tpl_vars['datum2']->value;?>
</p>
                <p>Cijena: <?php echo $_smarty_tpl->tpl_vars['cijena']->value;?>
</p><input type="hidden" name="cijena_skriven" value="<?php echo $_smarty_tpl->tpl_vars['cijena']->value;?>
" />  
                <input type="submit" name="dodaj" id="dodaj" style="margin-top:5px;" class="btn btn-success" value="Dodaj u košaricu" /> 
            </form>
            
        </div>

    </article>
</a>
                
<?php }} ?>
