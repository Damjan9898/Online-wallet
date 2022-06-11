<?php
/* Smarty version 3.1.43, created on 2022-06-08 23:14:01
  from 'C:\xampp\htdocs\AppTrans\akcija\dodaj_transakciju.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62a11119014120_54832966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a2fb54f9ba897f4f340523aafab3f4006bb522' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AppTrans\\akcija\\dodaj_transakciju.tpl',
      1 => 1654722784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a11119014120_54832966 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="DD wallet - save your money">
      <meta name="generator" content="Hugo 0.98.0">
      <title>DD wallet | Add transaction</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
      <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/31508fae48.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.2">
      <link href="css/css_bootstrap/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body class="transaction_body">
      <div class='add_transaction'>
         <form id="transaction_form" action="?akcija=dodaj_transakciju_db" method="post">
            <h2 class="dodaj_trans">
            Add transaction</h>
            <hr class="section_devide">
            <div class="form_transaction">
               <h4>Name:</h4>
               <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="naziv">
            </div>
            <div class="form_transaction">
               <h4>Value:</h4>
               <input type="text" class="form-control" id="floatingInput" placeholder="Value" name="vrednost">
            </div>
            <div class="form_transaction">
               <h4>Category: </h4>
               <div class="select_category">
                  <select class="form-select" aria-label="Default select example" name="kategorija">
                     <<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat']->value, 'Kategorija');
$_smarty_tpl->tpl_vars['Kategorija']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Kategorija']->value) {
$_smarty_tpl->tpl_vars['Kategorija']->do_else = false;
?>
                     <option value='<?php echo $_smarty_tpl->tpl_vars['Kategorija']->value->kategorija_id;?>
'><?php echo $_smarty_tpl->tpl_vars['Kategorija']->value->naziv_kategorije;?>
 </option>
                     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                  </select>
                  <div class="add_category">
                     <a class="add_category_link" href="?akcija=dodaj_kategoriju&tip_trans=<?php echo $_SESSION['tip_transakcije'];?>
">
                        <p><i class="fa fa-plus" aria-hidden="true"></i> Add category </p>
                     </a>
                  </div>
               </div>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" style="width:100px;margin-top:130px;">Submit</button>
      </div>
      </form>
   </body>
</html><?php }
}
