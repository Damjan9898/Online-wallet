<!doctype html>
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
      <script src="https://kit.fontawesome.com/31508fae48.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                     {foreach $Rezultat3 as $Racun}
                     <li ><a href="?akcija=menjanje_racuna&Racun_id={$Racun->racun_id}" style="padding-left:50px;" class="hovera">{$Racun->naziv}</a></li>
                     {/foreach}
                     <li style="font-weight:bold;background-color: #f2f2f2;padding:10px 0px;border-top:1px solid gray;"><a href="?akcija=dodaj_racun" class="hoverdodaj"><i class="fa-solid fa-circle-plus"></i>&nbsp;&nbsp;Dodaj racun</a></li>
                     <li style="font-weight:bold;background-color: #f2f2f2;padding:10px 0px;border-top:1px solid gray;"><a href="?akcija=odjavljivanje" class="hoverdodaj"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;<span>Logout</span></a></li>
                     <li style="font-weight:bold;background-color: #f2f2f2;padding:15px 20px 10px 20px;border-top:1px solid gray;"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;<span>{foreach $Rezultat3 as $Red}{if $Red->racun_id eq {$smarty.session.racun} }{$Red->username}{/if}{/foreach}</span></li>
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
      <script src="js/js_bootstrap/bootstrap.bundle.min.js"></script>
      <script>
         let niz_kategorija = [];
         
         let niz_vrednosti = [];
         
         {foreach $Rezultat1 as $Transakcija}
         
             niz_kategorija.push('{$Transakcija->naziv_kategorije}');
             niz_vrednosti.push('{$Transakcija->vrednost_kat}');
                 
         {/foreach}
         
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
         
         {foreach $Rezultat as $Transakcija1}
         
             niz_kategorija1.push('{$Transakcija1->naziv_kategorije}');
             niz_vrednosti1.push('{$Transakcija1->vrednost_kat}');
                 
         {/foreach}
         
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
         
             
             {foreach $Rezultat2 as $Transakcija2}
                 niz_vrednosti_baza.push('{$Transakcija2->sumirana_vrednost}');
                 niz_datuma_baza.push('{$Transakcija2->day_datum}');   
             {/foreach}
         
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
      </script>
      <script>
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
      </script>
   </body>
</html>