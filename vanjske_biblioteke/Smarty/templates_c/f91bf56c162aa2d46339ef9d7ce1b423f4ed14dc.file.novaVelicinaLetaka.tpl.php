<?php /* Smarty version Smarty-3.1.18, created on 2018-02-05 00:14:24
         compiled from "predlosci\novaVelicinaLetaka.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14628721005a778a9584eb66-88947561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f91bf56c162aa2d46339ef9d7ce1b423f4ed14dc' => 
    array (
      0 => 'predlosci\\novaVelicinaLetaka.tpl',
      1 => 1517786063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14628721005a778a9584eb66-88947561',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a778a958d5988_88391487',
  'variables' => 
  array (
    'greska' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a778a958d5988_88391487')) {function content_5a778a958d5988_88391487($_smarty_tpl) {?><style type="text/css">
.form-style-2{
    max-width: 500px;
    padding: 20px 12px 10px 20px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-2-heading{
    font-weight: bold;
    font-style: italic;
    border-bottom: 2px solid #ddd;
    margin-bottom: 20px;
    font-size: 15px;
    padding-bottom: 3px;
}
.form-style-2 label{
    display: block;
    margin: 0px 0px 15px 0px;
}
.form-style-2 label > span{
    width: 100px;
    font-weight: bold;
    float: left;
    padding-top: 8px;
    padding-right: 5px;
}
.form-style-2 span.required{
    color:red;
}
.form-style-2 .tel-number-field{
    width: 40px;
    text-align: center;
}
.form-style-2 input.input-field{
    width: 48%;
    
}

.form-style-2 input.input-field, 
.form-style-2 .tel-number-field, 
.form-style-2 .textarea-field, 
 .form-style-2 .select-field{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border: 1px solid #C2C2C2;
    box-shadow: 1px 1px 4px #EBEBEB;
    -moz-box-shadow: 1px 1px 4px #EBEBEB;
    -webkit-box-shadow: 1px 1px 4px #EBEBEB;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    padding: 7px;
    outline: none;
}
.form-style-2 .input-field:focus, 
.form-style-2 .tel-number-field:focus, 
.form-style-2 .textarea-field:focus,  
.form-style-2 .select-field:focus{
    border: 1px solid #0C0;
}
.form-style-2 .textarea-field{
    height:100px;
    width: 55%;
}
.form-style-2 input[type=submit],
.form-style-2 input[type=button]{
    border: none;
    padding: 8px 15px 8px 15px;
    background: #FF8500;
    color: #fff;
    box-shadow: 1px 1px 4px #DADADA;
    -moz-box-shadow: 1px 1px 4px #DADADA;
    -webkit-box-shadow: 1px 1px 4px #DADADA;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
}
.form-style-2 input[type=submit]:hover,
.form-style-2 input[type=button]:hover{
    background: #EA7B00;
    color: #fff;
}
</style>

<section class ="sadrzaj">
    
    <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>

    <div class="form-style-2">
        <div class="form-style-2-heading">Unesi novu veličinu letaka</div>
        <form action="" method="post">
            <label for="naziv"><span>Naziv <span class="required">*</span></span><input type="text" class="input-field" name="naziv" value="" id="naziv" /></label>
            <label for="opis"><span>Opis <span class="required">*</span></span><input type="text" class="input-field" name="opis" value="" id="opis"/></label>
            
            
            <label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
        </form>
    </div>
</section>
<?php }} ?>
