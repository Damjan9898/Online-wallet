<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="DD wallet - save your money">
      <meta name="generator" content="Hugo 0.98.0">
      <title>DD wallet | Home</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.2">
      <link href="css/css_bootstrap/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/31508fae48.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
      <!-- Dodavanje za tabele -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      <script
         src="http://code.jquery.com/jquery-3.3.1.min.js"
         integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
         crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
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
                  {foreach $Rezultat as $Racun}
                  <li ><a href="?akcija=menjanje_racuna&Racun_id={$Racun->racun_id}" style="padding-left:50px;" class="hovera">{$Racun->naziv}</a></li>
                  {/foreach}
                  <li style="font-weight:bold;background-color: #f2f2f2;padding:10px 0px;border-top:1px solid gray;"><a href="akcija=dodaj_racun" class="hoverdodaj"><i class="fa-solid fa-circle-plus"></i>&nbsp;&nbsp;Dodaj racun</a></li>
                  <li style="font-weight:bold;background-color: #f2f2f2;padding:10px 0px;border-top:1px solid gray;"><a href="?akcija=odjavljivanje" class="hoverdodaj"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;<span>Logout</span></a></li>
                  <li style="font-weight:bold;background-color: #f2f2f2;padding:15px 20px 10px 20px;border-top:1px solid gray;"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;<span>{foreach $Rezultat as $Red}{if $Red->racun_id eq {$smarty.session.racun} }{$Red->username}{/if}{/foreach}</span></li>
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
         <p class="subtitle"><span id="prikaz_mes"> </span> <span id="prikaz_god"> </span></p>
         <hr class="section_devide">
         <div class="gornji">
            <div class="desno">
               <p class="home_tit">Welcome <span class="bluetext">{foreach $Rezultat as $Red}{if $Red->racun_id eq {$smarty.session.racun} }{$Red->username}{/if}{/foreach}</span></p>
               <p class="home_info">Account name : <span>{foreach $Rezultat as $Red}{if $Red->racun_id eq {$smarty.session.racun}}{$Red->naziv}{/if}{/foreach}</span></p>
               <p class="home_info">Account currancy : <span>{foreach $Rezultat as $Red}{if $Red->racun_id eq {$smarty.session.racun}}{$Red->valuta}{/if}{/foreach}</span></p>
               <p class="home_info last_info">Account balance: <span class="stanje" id="stanje_blok" ></span></p>
               <div>
                  <button id="transakcija_main"class="transakcija pr" type="button" class="btn btn-primary" ><i class="fa-solid fa-plus"></i> &nbsp;Add transaction</button>
                  <a id="transbutton" href="#transakcije_dev"><button class="transakcija light" type="button" class="btn btn-light" >All transactions</button></a>
               </div>
            </div>
            <div class="container_chart" id="pomeraj_cont">
               <canvas id="myChart" style="width:100%;height:100%"></canvas>
            </div>
         </div>
         <hr class="section_devide" id="transakcije_dev">
         <div class="container_tabela">
            <div id="prikaz_dugmica" style="display:flex;">
               <button onclick="prikazIncome()" style="width:120px;height:40px;border:none;font-size:17px;margin-right:30px;background-color:#04acec;border-radius:5px;color:white;">Income</button> <button style="width:120px;height:40px;border:none;font-size:17px;margin-right:30px;background-color:#04acec;border-radius:5px;color:white;" onclick="prikazExpense()">Expense</button>
            </div>
            <div class="prikaz" style="width:95%;height:fit-content;display:block;">
               <div class="prikaz_income">
                  <div id="income" class="tab-pane show active" role="tabpanel">
                     <div class="transaction_table">
                        <div class="container">
                           <p style="font-size:32px; color:#008fc7;margin:10px 0px 30px 0px;font-weight:bold;"> Income table </p>
                           <table class="table table-fluid" id="myTable">
                              <thead>
                                 <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Value</th>
                                    <th>Category</th>
                                    <th></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 {foreach $Rezultat1 as $Transakcija}
                                 {if $Transakcija->tip_transakcije eq 0 }
                                 <tr>
                                    <td>{$Transakcija->naziv}</td>
                                    <td>{$Transakcija->datum}</td>
                                    <td>{$Transakcija->vrednost}</td>
                                    <td>{$Transakcija->naziv_kategorije}</td>
                                    <td><a href="?akcija=brisanje_transakcije_db&Transakcija_id={$Transakcija->transakcija_id}" onclick="if (!confirm('Do you want to delete the transaction?')) return false;"><i class="fa-solid fa-trash" style="margin-left:0px;"></i></a></td>
                                 </tr>
                                 {/if}
                                 {/foreach}
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="prikaz_expense">
                  <div id="expense" class="tab-pane" role="tabpanel">
                     <div class="transaction_table">
                        <div class="container">
                           <p style="font-size:32px; color:#008fc7;margin:10px 0px 30px 0px;font-weight:bold;"> Expense table </p>
                           <table class="table table-fluid" id="myTable1">
                              <thead>
                                 <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Value</th>
                                    <th>Category</th>
                                    <th></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 {foreach $Rezultat1 as $Transakcija}
                                 {if $Transakcija->tip_transakcije eq 1 }
                                 <tr>
                                    <td>{$Transakcija->naziv}</td>
                                    <td>{$Transakcija->datum}</td>
                                    <td>{$Transakcija->vrednost}</td>
                                    <td>{$Transakcija->naziv_kategorije}</td>
                                    <td><a href="?akcija=brisanje_transakcije_db&Transakcija_id={$Transakcija->transakcija_id}" onclick="if (!confirm('Do you want to delete the transaction?')) return false;"><i class="fa-solid fa-trash" style="margin-left:0px;"></i></a></td>
                                 </tr>
                                 {/if}
                                 {/foreach}
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
      <script>
         $(document).ready( function () {
             $('#myTable').DataTable();
             $('#myTable1').DataTable();
         
         } );
         
         
             
      </script>
      <script src="js/js_bootstrap/bootstrap.bundle.min.js"></script>
      <script src="js/popup.js"></script>
      <script src="js/main_functions.js"></script>
      <script>
         var ctx = document.getElementById("myChart").getContext('2d');
         
         let income = 0;
         
         let expense = 0;
         
         {foreach $Rezultat1 as $Transakcija}
         
             {if {$Transakcija->tip_transakcije} eq 0}
                 income += {$Transakcija->vrednost}
             {else}
                 expense += {$Transakcija->vrednost}
             {/if}
         {/foreach}
         
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
         
      </script>
   </body>
</html>