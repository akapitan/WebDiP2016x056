<?php /* Smarty version Smarty-3.1.18, created on 2018-07-05 20:11:50
         compiled from "predlosci\letci2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18182635795a75bada6f7607-40543544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '006ee9f4a2a968394260ef3729e04f3a19a4e983' => 
    array (
      0 => 'predlosci\\letci2.tpl',
      1 => 1530719133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18182635795a75bada6f7607-40543544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a75bada745743_20016309',
  'variables' => 
  array (
    'url' => 0,
    'naslov' => 0,
    'opis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a75bada745743_20016309')) {function content_5a75bada745743_20016309($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\WebDiP2016x056\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.cycle.php';
?><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/bs_BA/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
        <div class="fb-share-button" data-href="http://webdip.barka.foi.hr/2016_projekti/WebDiP2016x056/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwebdip.barka.foi.hr%2F2016_projekti%2FWebDiP2016x056%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Dijeli</a></div>
        

    </article>
<?php }} ?>
