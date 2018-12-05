<?php /* Smarty version Smarty-3.1.18, created on 2018-02-08 15:09:44
         compiled from "predlosci\moderatorMjenjajIzgled.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19679561595a7c44fba61d16-98318067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e6356bbf6a0d4d89d64e9ee2eca19b2f9c7fd76' => 
    array (
      0 => 'predlosci\\moderatorMjenjajIzgled.tpl',
      1 => 1518098968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19679561595a7c44fba61d16-98318067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a7c44fba63558_39778599',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7c44fba63558_39778599')) {function content_5a7c44fba63558_39778599($_smarty_tpl) {?><script type="text/javascript">
    function promjeniBoju(boja){
        document.getElementById('header').id = 'headerCrveno';
        
        
        var elem = document.getElementById('header');
        elem.style.background = boja;
    }
    
   
</script>

<button onclick="document.getElementById('header').id = 'headerCrveno'; return false" class="gumb" id="crveno"></button>
<button onclick="promjeniBoju('#3498db')" class="gumb" id="plavo"></button>
<button onclick="promjeniBoju('#660066')" class="gumb" id="ljubicasto"></button>

<?php }} ?>
