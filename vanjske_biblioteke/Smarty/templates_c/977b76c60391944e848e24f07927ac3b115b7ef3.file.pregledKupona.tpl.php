<?php /* Smarty version Smarty-3.1.18, created on 2018-07-06 22:24:25
         compiled from "predlosci\pregledKupona.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5089515225a7a1bc6405eb1-98636310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '977b76c60391944e848e24f07927ac3b115b7ef3' => 
    array (
      0 => 'predlosci\\pregledKupona.tpl',
      1 => 1530719134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5089515225a7a1bc6405eb1-98636310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a7a1bc645f844_21840897',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7a1bc645f844_21840897')) {function content_5a7a1bc645f844_21840897($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP2016x056\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
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
