<?php /* Smarty version Smarty-3.1.18, created on 2018-02-13 16:44:04
         compiled from "predlosci/moderatorProvjeriKupon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5210270385a8307c4889e82-23594530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b471b82bb5294a995f6f8c2689b3abf97ae44ca2' => 
    array (
      0 => 'predlosci/moderatorProvjeriKupon.tpl',
      1 => 1518535185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5210270385a8307c4889e82-23594530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'greska' => 0,
    'imee' => 0,
    'prez' => 0,
    'kor' => 0,
    'naziv' => 0,
    'datum_od' => 0,
    'datum_do' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a8307c4911db3_45898239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8307c4911db3_45898239')) {function content_5a8307c4911db3_45898239($_smarty_tpl) {?><style type="text/css">
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
        <div class="form-style-2-heading">Provjera kupona </div>
        <form action="" method="post">
            <label for="naziv"><span>Unesi kod <span class="required">*</span></span><input type="text" class="input-field" name="naziv" value="" id="naziv" /></label>
            
            
            
            <label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
        </form>
    </div>
    <div>
        <table style="width:100%; display:block;">
            <tr>
                <th>Ime</th>
                <th>Prezime</th> 
                <th>Korisničko ime</th>
                
                <th>Naziv kupona</th>
                <th>Vrijedi od</th>
                <th>Vrijedi do</th>
            </tr>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['imee']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['prez']->value;?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['kor']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['datum_od']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['datum_do']->value;?>
</td>
            </tr>
            
        </table>
    </div>
          
</section>
<?php }} ?>
