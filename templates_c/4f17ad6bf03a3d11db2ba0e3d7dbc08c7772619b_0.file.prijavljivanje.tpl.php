<?php
/* Smarty version 3.1.43, created on 2022-06-01 19:28:35
  from 'C:\xampp\htdocs\RVA\AppTrans\akcija\prijavljivanje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6297a1c3671609_78228242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f17ad6bf03a3d11db2ba0e3d7dbc08c7772619b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RVA\\AppTrans\\akcija\\prijavljivanje.tpl',
      1 => 1654104511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6297a1c3671609_78228242 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DD wallet - save your money">
    <meta name="generator" content="Hugo 0.98.0">
    <title>DD wallet | Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2">
    <link href="css/css_bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    

    
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto" id="main_login">

  <form id="login_form" action="?akcija=prijavljivanje" method="post">
    <img src="img/logo.png" alt="logo" class="login_logo"> 
    <h1 class="h3 mb-3 fw-normal">Log in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="korisnik">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="lozinka">
      <label for="floatingPassword">Password</label>
    </div>

    <p class="text-danger" style="font-weight:bold!important;font-size:17px;"><?php echo $_smarty_tpl->tpl_vars['Rezultat']->value;?>
</p>

    <div class="acc-signup">
      Don't have an account? <a href="?akcija=dodavanje_korisnika" style="font-weight:bold;color:#04acec!important;">Sign up</a>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; DD wallet | <span id="year"></span></p>
  </form>
</main>



<?php echo '<script'; ?>
 src="js/copyright.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
