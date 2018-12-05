<?php /* Smarty version Smarty-3.1.18, created on 2018-07-07 12:01:55
         compiled from "predlosci\adminVirtualnoVrijeme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2377740955a815b01169a47-92389641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd682ce8bbdb7f0f0a886a6e8b2c9b49def84352b' => 
    array (
      0 => 'predlosci\\adminVirtualnoVrijeme.tpl',
      1 => 1530719134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2377740955a815b01169a47-92389641',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a815b011b77b5_78477709',
  'variables' => 
  array (
    'greska' => 0,
    'vrijemeTrenutno' => 0,
    'vrijemeVirtualno' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a815b011b77b5_78477709')) {function content_5a815b011b77b5_78477709($_smarty_tpl) {?><style type="text/css">
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
        <div class="form-style-2-heading">Unesi pomak</div>
        <form action="" method="post">
            
               <h4>Prvo unesi pomak <a href="http://barka.foi.hr/WebDiP/pomak_vremena/vrijeme.html" target="_blank" >ovdje</a>. Zatim potvrdi.</h4>


                <a class="button tiny" href="izmjena.php">Potvrda</a>


                <p>Trenutno vrijeme: <?php echo $_smarty_tpl->tpl_vars['vrijemeTrenutno']->value;?>
</p>   <br><br>
                <p>Virtualno vrijeme: <?php echo $_smarty_tpl->tpl_vars['vrijemeVirtualno']->value;?>
</p>   <br><br>
            
            <label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
        </form>
    </div>
</section>
<?php }} ?>
