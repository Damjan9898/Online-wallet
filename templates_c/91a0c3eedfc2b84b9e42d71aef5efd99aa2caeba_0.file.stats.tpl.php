<?php
/* Smarty version 3.1.43, created on 2022-06-05 19:38:15
  from 'C:\xampp\htdocs\RVA\AppTrans\akcija\stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_629cea07acb609_62303265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91a0c3eedfc2b84b9e42d71aef5efd99aa2caeba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RVA\\AppTrans\\akcija\\stats.tpl',
      1 => 1654450691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cea07acb609_62303265 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <div class="side_block active">
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

            <p id="datumi"></p>

            <div class="title_block">
                <span class="title_content">
                    Statistics
                </span>
                <hr>
            </div>


            <p class="subtitle">Expense categoriess</p>
            
            <hr class="section_devide">
    
            <div>
                <canvas id="barChart"></canvas>
            </div>

            <p class="subtitle">Income categories</p>
            
            <hr class="section_devide">
    

            <div>
                <canvas id="doughnutChart"></canvas>
            </div>


            <p class="subtitle">Monthly account balance</p>
            
            <hr class="section_devide">
    
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


        



        let niz_kategorija = [];

        let niz_vrednosti = [];

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat1']->value, 'Transakcija');
$_smarty_tpl->tpl_vars['Transakcija']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Transakcija']->value) {
$_smarty_tpl->tpl_vars['Transakcija']->do_else = false;
?>

            niz_kategorija.push('<?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->naziv_kategorije;?>
');
            niz_vrednosti.push('<?php echo $_smarty_tpl->tpl_vars['Transakcija']->value->vrednost_kat;?>
');
                
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        let date = new Date();
        let month = date.toLocaleString('default', { month: 'long' });
        let year = date.getFullYear();
        let full_date = month + ", " + year;

        const labels = niz_kategorija;
        const data = {
        labels: labels,
        datasets: [{
            label: full_date,
            data: niz_vrednosti,
            backgroundColor: [
            'rgba(4,172,0, 0.2)',
            'rgba(4,172,50, 0.2)',
            'rgba(4,172,100, 0.2)',
            'rgba(4,172,150, 0.2)',
            'rgba(4,172,200, 0.2)',
            'rgba(4,172,250, 0.2)'
            ],
            borderColor: [
            'rgba(4,172,250)',
            'rgba(4,172,250)',
            'rgba(4,172,250)',
            'rgba(4,172,250)',
            'rgba(4,172,250)',
            'rgba(4,172,250)'
            ],
            borderWidth: 1
        }]
        };

        const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        },
        };



        let niz_kategorija1 = [];

        let niz_vrednosti1 = [];

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat']->value, 'Transakcija1');
$_smarty_tpl->tpl_vars['Transakcija1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Transakcija1']->value) {
$_smarty_tpl->tpl_vars['Transakcija1']->do_else = false;
?>

            niz_kategorija1.push('<?php echo $_smarty_tpl->tpl_vars['Transakcija1']->value->naziv_kategorije;?>
');
            niz_vrednosti1.push('<?php echo $_smarty_tpl->tpl_vars['Transakcija1']->value->vrednost_kat;?>
');
                
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        let date1 = new Date();
        let month1 = date1.toLocaleString('default', { month: 'long' });
        let year1 = date1.getFullYear();
        let full_date1 = month1 + ", " + year1;






        const data1 = {
            labels: niz_kategorija1,
            datasets: [{
                label: full_date1,
                data: niz_vrednosti1,
                backgroundColor: [
                'rgb(4,172,150)',
                'rgb(4,172,200)',
                'rgb(4,172,250)'
                ],
                hoverOffset: 4
            }]
            };

            const config1 = {
            type: 'doughnut',
            data: data1,
            };


            let broj_dana_mesec = new Date(new Date().getFullYear(), new Date().getMonth(), 0).getDate();

            let niz_datuma = [];

            for(let i = 1; i < broj_dana_mesec + 1; i++){
                niz_datuma.push(i);
            }

            
            let niz_vrednosti_baza = [];

            let niz_datuma_baza = [];

            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Rezultat2']->value, 'Transakcija2');
$_smarty_tpl->tpl_vars['Transakcija2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Transakcija2']->value) {
$_smarty_tpl->tpl_vars['Transakcija2']->do_else = false;
?>
                niz_vrednosti_baza.push('<?php echo $_smarty_tpl->tpl_vars['Transakcija2']->value->sumirana_vrednost;?>
');
                niz_datuma_baza.push('<?php echo $_smarty_tpl->tpl_vars['Transakcija2']->value->day_datum;?>
');   
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            let niz_vrednosti_graf = [];

            let cuvanje_vrednosti = 0;

            for(let i = 0; i < broj_dana_mesec; i++){
                for(let j = 0; j < niz_datuma_baza.length; j++){
                    if(niz_datuma[i] == niz_datuma_baza[j]){
                        cuvanje_vrednosti = niz_vrednosti_baza[j];
                        break;
                    }else{
                        cuvanje_vrednosti=0;
                    }
                }
                niz_vrednosti_graf.push(cuvanje_vrednosti);
            }



            const labels2 = niz_datuma
            const data2 = {
            labels: labels2,
            datasets: [{
                label: full_date1,
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
        const myChart = new Chart(
          document.getElementById('barChart'),
          config
        );

        const myChart1 = new Chart(
          document.getElementById('doughnutChart'),
          config1
        );

        const myChart2 = new Chart(
          document.getElementById('lineChart'),
          config2
        );
      <?php echo '</script'; ?>
>
</body>
</html><?php }
}
