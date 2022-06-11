<?php
/* Smarty version 3.1.43, created on 2022-06-09 21:50:53
  from 'C:\xampp\htdocs\AppTrans\akcija\dodaj_racun.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62a24f1d2fc6f0_04629024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '300d61623b15b9d8a3c4bd4fa86fdc9c70485606' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AppTrans\\akcija\\dodaj_racun.tpl',
      1 => 1654804191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a24f1d2fc6f0_04629024 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="DD wallet - save your money">
      <meta name="generator" content="Hugo 0.98.0">
      <title>DD wallet | Add Account</title>
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
      <div class='add_account' style="width:500px; height:500px; background-color: white; border:2px solid #d2dadd; border-radius: 10px; padding:20px;">
         <form id="transaction_form" action="?akcija=dodaj_racun_db" method="post">
            <h2 class="dodaj_trans">
            Add account</h>
            <hr class="section_devide">
            <div class="form_transaction">
               <h4>Account name:</h4>
               <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="account">
            </div>
            <div class="form_transaction">
               <h4>Currency: </h4>
               <div class="select_category">
                  <select class="form-select" aria-label="Default select example" name="currency">
                     <option value="RSD" selected>RSD</option>
                     <option value="EUR" >EUR</option>
                  </select>
               </div>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" style="width:100px;margin-top:120px;">Submit</button>
      </div>
      </form>
   </body>
</html><?php }
}
