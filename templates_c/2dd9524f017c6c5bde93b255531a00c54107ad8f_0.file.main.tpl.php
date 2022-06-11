<?php
/* Smarty version 3.1.43, created on 2022-06-05 23:24:39
  from 'C:\xampp\htdocs\RVA\AppTrans\akcija\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_629d1f17ec77c1_13021236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dd9524f017c6c5bde93b255531a00c54107ad8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RVA\\AppTrans\\akcija\\main.tpl',
      1 => 1654455456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629d1f17ec77c1_13021236 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DD wallet - save your money">
    <meta name="generator" content="Hugo 0.98.0">
    <title>DD wallet | Statistic</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2">
    <link href="css/css_bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/31508fae48.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js"><?php echo '</script'; ?>
>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">


<!-- Dodavanje za tabele -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>

  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ><?php echo '</script'; ?>
>
    

    
  </head>
  <body>
    <div class="main_div">
        <div class="sidenav">
            <div class="fixed_sidenav">
                <div>
                    <div class="logo">
                        <img src="img/logo.png" alt="logo">
                    </div>
                    <hr class="side_hr">
                    <div class="sidenav-links">
                        <a href="?akcija=main">
                            <div class="side_block active">
                                <i class="fa-solid fa-house"></i>
                            </div>
                        </a>
                        <a href="?akcija=stats">
                            <div class="side_block">
                                <i class="fa-solid fa-chart-column"></i>
                            </div>
                        </a>
                        <a href="?akcija=arhiva">
                            <div class="side_block">
                                <i class="fa-solid fa-folder"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="dropup" id="dropup_block">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <div class="person_circle">
                            <i class="fa-solid fa-user"></i>
                        </div> 
                    </button>
                    <ul class="dropdown-menu" style="font-size:16px;">
                      <li style="padding-left:20px;">
                        <i class="fa-solid fa-wallet"></i> &nbsp;&nbsp;Racuni :
                      </li>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat']->value, 'Racun');
$_smarty_tpl->tpl_vars['Racun']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Racun']->value) {
$_smarty_tpl->tpl_vars['Racun']->do_else = false;
?>
                            <li ><a href="?akcija=menjanje_racuna&Racun_id=<?php echo $_smarty_tpl->tpl_vars['Racun']->value->racun_id;?>
" style="padding-left:50px;" class="hovera"><?php echo $_smarty_tpl->tpl_vars['Racun']->value->naziv;?>
</a></li>
                     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      <li style="font-weight:bold;background-color: #f2f2f2;padding:10px 0px;border-top:1px solid gray;"><a href="?akcija=dodaj_racun" class="hoverdodaj"><i class="fa-solid fa-circle-plus"></i>&nbsp;&nbsp;Dodaj racun</a></li>
                      <li style="font-weight:bold;background-color: #f2f2f2;padding:10px 0px;border-top:1px solid gray;"><a href="?akcija=odjavljivanje" class="hoverdodaj"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;<span>Logout</span></a></li>
                      <li style="font-weight:bold;background-color: #f2f2f2;padding:15px 20px 10px 20px;border-top:1px solid gray;"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;<span><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat']->value, 'Red');
$_smarty_tpl->tpl_vars['Red']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Red']->value) {
$_smarty_tpl->tpl_vars['Red']->do_else = false;
ob_start();
echo $_SESSION['racun'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['Red']->value->racun_id == $_prefixVariable1) {
echo $_smarty_tpl->tpl_vars['Red']->value->username;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></span></li>
                      
                    </ul>
                  </div>
            </div>
        </div>
        <div class="content">
            <div class="title_block">
                <span class="title_content">
                    Home
                </span>
                <hr>
            </div>




            <p class="subtitle">May 2022</p>
            
            <hr class="section_devide">

            <div class="gornji">    
                
                <div class="desno">
                    

                    <p class="home_tit">Welcome <span class="bluetext"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat']->value, 'Red');
$_smarty_tpl->tpl_vars['Red']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Red']->value) {
$_smarty_tpl->tpl_vars['Red']->do_else = false;
ob_start();
echo $_SESSION['racun'];
$_prefixVariable2 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['Red']->value->racun_id == $_prefixVariable2) {
echo $_smarty_tpl->tpl_vars['Red']->value->username;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></span></p>   
                    <p class="home_info">Account name : <span><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat']->value, 'Red');
$_smarty_tpl->tpl_vars['Red']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Red']->value) {
$_smarty_tpl->tpl_vars['Red']->do_else = false;
ob_start();
echo $_SESSION['racun'];
$_prefixVariable3 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['Red']->value->racun_id == $_prefixVariable3) {
echo $_smarty_tpl->tpl_vars['Red']->value->naziv;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></span></p>
                    <p class="home_info">Account currancy : <span><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat']->value, 'Red');
$_smarty_tpl->tpl_vars['Red']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Red']->value) {
$_smarty_tpl->tpl_vars['Red']->do_else = false;
ob_start();
echo $_SESSION['racun'];
$_prefixVariable4 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['Red']->value->racun_id == $_prefixVariable4) {
echo $_smarty_tpl->tpl_vars['Red']->value->valuta;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></span></p>
                    <p class="home_info last_info">Account balance: <span class="stanje" id="stanje_blok" ></span></p>
                    <div>
                        <button id="transakcija_main"class="transakcija pr" type="button" class="btn btn-primary" ><i class="fa-solid fa-plus"></i> &nbsp;Add transaction</button>
                        <a id="transbutton" href="#transakcije_dev"><button class="transakcija light" type="button" class="btn btn-light" >All transactions</button></a>
                    </div>
                    
                </div>
                <div class="container_chart">
                    <canvas id="myChart" style="width:100%;height:100%"></canvas>
                </div>
            </div>

            <hr class="section_devide" id="transakcije_dev">

            <div class="container_nav">
            
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" role="tab" href="#income"  aria-selected="true" id="in">Income</a></li>
                <li><a data-toggle="tab" href="#expense" role="tab"  aria-selected="false" id="ex">Expense</a></li>
              </ul>
              <div class="tab-content">
                <div id="income" class="tab-pane fade show active" role="tabpanel">
                    <div class="transaction_table">
                        <div class="container">

                        <table class="table table-fluid" id="myTable">
                            <thead>
                            <tr><th>Name</th><th>Date</th><th>Value</th><th>Category</th></tr>
                        </thead>
                            <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat1']->value, 'Transakcija');
$_smarty_tpl->tpl_vars['Transakcija']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Transakcija']->value) {
$_smarty_tpl->tpl_vars['Transakcija']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['Transakcija']->value->tip_transakcije == 0) {?>
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->naziv;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->datum;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->vrednost;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->naziv_kategorije;?>
</td></tr>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                         </tbody>
                            </table>     
                        </div>
                    </div>
                </div>
                <div id="expense" class="tab-pane fade" role="tabpanel">
                    <div class="transaction_table">
                        <div class="container">
                           <table class="table table-fluid" id="myTable1">
                            <thead>
                            <tr><th>Name</th><th>Date</th><th>Value</th><th>Category</th></tr>
                        </thead>
                            <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat1']->value, 'Transakcija');
$_smarty_tpl->tpl_vars['Transakcija']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Transakcija']->value) {
$_smarty_tpl->tpl_vars['Transakcija']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['Transakcija']->value->tip_transakcije == 1) {?>
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->naziv;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->datum;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->vrednost;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->naziv_kategorije;?>
</td></tr>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                         </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
              </div>

              
            </div>
            

        

        </div>
    </div>

    
    

    <div class="popup">
        <div class="popup_center">
                <p class="pop_title">Transaction-type</p>

                <div class="pop_div">
                     <a href="?akcija=dodaj_transakciju&tip_trans=0"> <button type="button" class="pop_block">
                        <i class="fa-solid fa-money-bill-trend-up"></i><br>Income 
                    </button> </a>
                    <a href="?akcija=dodaj_transakciju&tip_trans=1"> <button type="button" class="pop_block">
                       <i class="fa-solid fa-money-bill-transfer"></i><br>Expense 
                    </button> </a>
                </div>
        </div>
    </div>

    <?php echo '<script'; ?>
>

        $(document).ready( function () {
            $('#myTable').DataTable();
            $('#myTable1').DataTable();
        
        } );
        
        
            <?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="js/js_bootstrap/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/popup.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var ctx = document.getElementById("myChart").getContext('2d');

        let income = 0;

        let expense = 0;

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat1']->value, 'Transakcija');
$_smarty_tpl->tpl_vars['Transakcija']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Transakcija']->value) {
$_smarty_tpl->tpl_vars['Transakcija']->do_else = false;
?>

            <?php ob_start();
echo $_smarty_tpl->tpl_vars['Transakcija']->value->tip_transakcije;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == 0) {?>
                income += <?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->vrednost;?>

            <?php } else { ?>
                expense += <?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->vrednost;?>

            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        let stanje = income - expense;

        document.getElementById("stanje_blok").innerHTML = stanje;

        var massPopChart = new Chart(myChart, {
        type: "bar",
        data: {
            labels: ["Income", "Expense"],
            datasets: [{
            label: "",
            data: [income,expense],
            backgroundColor: [
            'rgba(4,172,50, 0.2)',
            'rgba(4,172,255, 0.2)'
            ],
            borderColor: [
            'rgba(4,172,250)'
            ],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
                    xAxes: [{
                        barThickness: 8, 
                        stacked: true,
                        }],
                    yAxes: [{
                        beginAtZero: true,
                        stacked: true
                        }]
                },
                plugins:{
                    legend: {
                        display: false
                        }
                    }
            }
        });

    <?php echo '</script'; ?>
>


</body>
</html><?php }
}
