<?php
/* Smarty version 3.1.43, created on 2022-06-05 19:38:13
  from 'C:\xampp\htdocs\RVA\AppTrans\akcija\arhiva.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_629cea058b5688_16063683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12f45966879591ff41ee510ecc25db9dc750f27c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RVA\\AppTrans\\akcija\\arhiva.tpl',
      1 => 1654450683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cea058b5688_16063683 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
                            <div class="side_block">
                                <i class="fa-solid fa-house"></i>
                            </div>
                        </a>
                        <a href="?akcija=stats">
                            <div class="side_block">
                                <i class="fa-solid fa-chart-column"></i>
                            </div>
                        </a>
                        <a href="?akcija=arhiva">
                            <div class="side_block active">
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
                    Archive
                </span>
                <hr>
            </div>

            <p class="subtitle">Yearly account balance - <span style="color:orange;"><?php echo $_SESSION['year'];?>
</span></p>
            
            <hr class="section_devide">

            <div class="form_year">
                    <form action="?akcija=promeni_godinu" method="POST">
                        <select name="year" id="years">
                            <option selected="true" disabled="disabled">Year</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat1']->value, 'Year');
$_smarty_tpl->tpl_vars['Year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Year']->value) {
$_smarty_tpl->tpl_vars['Year']->do_else = false;
?>
                                <option value='<?php echo $_smarty_tpl->tpl_vars['Year']->value->year_datum;?>
'><?php echo $_smarty_tpl->tpl_vars['Year']->value->year_datum;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <input type="submit" value="Submit" class="year_sub">
                      </form>
            </div>
            
    
            <div>
                <canvas id="lineChart"></canvas>
            </div>

        </div>
    </div>
    
    <?php echo '<script'; ?>
 src="js/js_bootstrap/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>

            
            let niz_vrednosti_baza = [];

            let niz_meseci_baza = [];

            let niz_meseci = [1,2,3,4,5,6,7,8,9,10,11,12];

            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat']->value, 'Transakcija');
$_smarty_tpl->tpl_vars['Transakcija']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Transakcija']->value) {
$_smarty_tpl->tpl_vars['Transakcija']->do_else = false;
?>
                niz_vrednosti_baza.push('<?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->sumirana_vrednost;?>
');
                niz_meseci_baza.push('<?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->month_datum;?>
');   
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            let niz_vrednosti_graf = [];

            let cuvanje_vrednosti = 0;

            for(let i = 0; i < 12; i++){
                for(let j = 0; j < niz_meseci_baza.length; j++){
                    if(niz_meseci[i] == niz_meseci_baza[j]){
                        cuvanje_vrednosti = niz_vrednosti_baza[j];
                        break;
                    }else{
                        cuvanje_vrednosti=0;
                    }
                }
                niz_vrednosti_graf.push(cuvanje_vrednosti);
            }





      

            const labels2 = ['January','February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] 
            const data2 = {
            labels: labels2,
            datasets: [{
                label: 'Yearly balance',
                data: niz_vrednosti_graf,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
            };

            const config2 = {
            type: 'line',
            data: data2,
            };
      <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
>

        const myChart2 = new Chart(
          document.getElementById('lineChart'),
          config2
        );
      <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
>


    document.getElementsByClassName("bojaspan")[0].style.color="#04acec!important;";

      <?php echo '</script'; ?>
>
</body>
</html><?php }
}
