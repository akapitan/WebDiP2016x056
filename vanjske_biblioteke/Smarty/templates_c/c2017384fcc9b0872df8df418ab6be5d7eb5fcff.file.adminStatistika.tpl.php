<?php /* Smarty version Smarty-3.1.18, created on 2018-07-09 20:56:56
         compiled from "predlosci\adminStatistika.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13989711765a7b213f669390-31536320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2017384fcc9b0872df8df418ab6be5d7eb5fcff' => 
    array (
      0 => 'predlosci\\adminStatistika.tpl',
      1 => 1531162616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13989711765a7b213f669390-31536320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a7b213f6c74e3_41682592',
  'variables' => 
  array (
    'data' => 0,
    'rowinfo' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b213f6c74e3_41682592')) {function content_5a7b213f6c74e3_41682592($_smarty_tpl) {?><div style="clear:both"></div>  
<br />  
<h3>Statistika korisnika</h3>
    
<div class="table-responsive">  
    <table id="adminStatistika" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <?php  $_smarty_tpl->tpl_vars['rowinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowinfo']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['rowinfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['rowinfo']->key => $_smarty_tpl->tpl_vars['rowinfo']->value) {
$_smarty_tpl->tpl_vars['rowinfo']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['rowinfo']->key;
 $_smarty_tpl->tpl_vars['rowinfo']->index++;
 $_smarty_tpl->tpl_vars['rowinfo']->first = $_smarty_tpl->tpl_vars['rowinfo']->index === 0;
?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rowinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['rowinfo']->first) {?>
                        <script>
                            var url =window.location.href;
                            document.write("<th><a href='" + url + "&sort=<?php echo $_smarty_tpl->tpl_vars['value']->key;?>
'><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
</a></th>");
                        </script>
                        
                    <?php }?>
                <?php } ?>
        <?php } ?>
            <script>
                            var url =window.location.href;
                            document.write("<th><a href='" + url + "&print'>printaj</a></th>");
                        </script>
            
            
        </tr>
    </thead>

    <tbody>
    <?php  $_smarty_tpl->tpl_vars['rowinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowinfo']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['rowinfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['rowinfo']->key => $_smarty_tpl->tpl_vars['rowinfo']->value) {
$_smarty_tpl->tpl_vars['rowinfo']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['rowinfo']->key;
 $_smarty_tpl->tpl_vars['rowinfo']->index++;
 $_smarty_tpl->tpl_vars['rowinfo']->first = $_smarty_tpl->tpl_vars['rowinfo']->index === 0;
?>
        
    <tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rowinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
            
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
        <?php } ?>

       
    </tr>
    <?php } ?>
 
    </tbody>
</table>
    
    
</div>  
<?php }} ?>
