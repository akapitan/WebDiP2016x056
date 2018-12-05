<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:45:13
         compiled from "predlosci/moderatorDodajLetak.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20183055435a83080978cba0-87334289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e92464fd9e12cc3cf12b23487156cea85f0637d' => 
    array (
      0 => 'predlosci/moderatorDodajLetak.tpl',
      1 => 1518535185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20183055435a83080978cba0-87334289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'greska' => 0,
    'opcije' => 0,
    'prva' => 0,
    'opcije2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a830809815353_07969979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a830809815353_07969979')) {function content_5a830809815353_07969979($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/webdip.barka.foi.hr/2016_projekti/WebDiP2016x056/vanjske_biblioteke/Smarty/libs/plugins/function.html_options.php';
?><style type="text/css">
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
        <div class="form-style-2-heading">Novi letak</div>
        <form  method="post" enctype="multipart/form-data">
            <label for="naziv"><span>Naziv <span class="required">*</span></span><input type="text" class="input-field" name="naziv" value="" id="naziv" /></label>
            <label for="opis"><span>Opis <span class="required">*</span></span><input type="text" class="input-field" name="opis" value="" id="opis"/></label>
            <label > <span>Kategorija:  <span class="required">*</span></span> </label><?php echo smarty_function_html_options(array('name'=>'kategorija','id'=>"kategorija",'options'=>$_smarty_tpl->tpl_vars['opcije']->value,'selected'=>$_smarty_tpl->tpl_vars['prva']->value),$_smarty_tpl);?>
<br><br>
            <label > <span>Velicina:  <span class="required">*</span></span> </label><?php echo smarty_function_html_options(array('name'=>'velicina','id'=>"velicina",'options'=>$_smarty_tpl->tpl_vars['opcije2']->value,'selected'=>$_smarty_tpl->tpl_vars['prva']->value),$_smarty_tpl);?>
<br><br>
            <label for="datum_od" > <span>Datum od: <span class="required">*</span></span> </label><input id="datum_od" name="datum_od" type="date" class="input-field">
            
            <label for="datum_do" > <span>Datum do: <span class="required">*</span></span> </label><input id="datum_do" name="datum_do" type="date" class="input-field"/><br><br>
            
            <label for="fileToUpload" class="btn">Odaberi sliku</label>
            <input type="file" name="fileToUpload" id="fileToUpload"  style="visibility:hidden;">
            
            
            <label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
        </form>
    </div>
</section>
<?php }} ?>
