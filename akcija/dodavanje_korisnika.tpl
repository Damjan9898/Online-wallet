<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="DD wallet - save your money">
      <meta name="generator" content="Hugo 0.98.0">
      <title>DD wallet | Signup</title>
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
         <form id="login_form" action="?akcija=dodavanje_korisnika_db" method="post">
            <img src="img/logo.png" alt="logo" class="login_logo"> 
            <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
            <div class="form-floating">
               <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="korisnik">
               <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
               <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="lozinka">
               <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary sgbutt" type="submit">Sign Up</button>
            <p class="mt-5 mb-3 text-muted">&copy; DD wallet | <span id="year"></span></p>
         </form>
      </main>
      <script src="js/copyright.js"></script>
   </body>
</html>