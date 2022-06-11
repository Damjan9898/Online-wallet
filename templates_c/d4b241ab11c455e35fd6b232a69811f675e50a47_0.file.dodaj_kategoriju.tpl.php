<?php
/* Smarty version 3.1.43, created on 2022-06-08 23:31:40
  from 'C:\xampp\htdocs\AppTrans\akcija\dodaj_kategoriju.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62a1153cc6a584_90591662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4b241ab11c455e35fd6b232a69811f675e50a47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AppTrans\\akcija\\dodaj_kategoriju.tpl',
      1 => 1654722707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a1153cc6a584_90591662 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="DD wallet - save your money">
      <meta name="generator" content="Hugo 0.98.0">
      <title>DD wallet | Add category</title>
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
      <div class='add_account' >
         <form id="transaction_form" action="?akcija=dodaj_kategoriju_db&tip_trans=<?php echo $_SESSION['tip_transakcije'];?>
" method="post">
            <h2 class="dodaj_trans">
            Add category</h>
            <hr class="section_devide">
            <div class="form_transaction" style="margin-top:50px;">
               <h4>Name:</h4>
               <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="naziv">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" style="width:100px;margin-top:170px;">Submit</button>
      </div>
      </form>
   </body>
</html><?php }
}
