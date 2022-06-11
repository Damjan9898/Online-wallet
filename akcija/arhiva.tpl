<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="DD wallet - save your money">
      <meta name="generator" content="Hugo 0.98.0">
      <title>DD wallet | Archive</title>
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
                     {foreach $Rezultat2 as $Racun}
                     <li ><a href="?akcija=menjanje_racuna&Racun_id={$Racun->racun_id}" style="padding-left:50px;" class="hovera">{$Racun->naziv}</a></li>
                     {/foreach}
                     <li style="font-weight:bold;background-color: #f2f2f2;padding:10px 0px;border-top:1px solid gray;"><a href="?akcija=dodaj_racun" class="hoverdodaj"><i class="fa-solid fa-circle-plus"></i>&nbsp;&nbsp;Dodaj racun</a></li>
                     <li style="font-weight:bold;background-color: #f2f2f2;padding:10px 0px;border-top:1px solid gray;"><a href="?akcija=odjavljivanje" class="hoverdodaj"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;<span>Logout</span></a></li>
                     <li style="font-weight:bold;background-color: #f2f2f2;padding:15px 20px 10px 20px;border-top:1px solid gray;"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;<span>{foreach $Rezultat2 as $Red}{if $Red->racun_id eq {$smarty.session.racun} }{$Red->username}{/if}{/foreach}</span></li>
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
            <p class="subtitle">Yearly account balance - <span style="color:orange;">{$smarty.session.year}</span></p>
            <hr class="section_devide">
            <div class="form_year">
               <form action="?akcija=promeni_godinu" method="POST">
                  <select name="year" id="years">
                     <option selected="true" disabled="disabled">Year</option>
                     {foreach $Rezultat1 as $Year}
                     <option value='{$Year->year_datum}'>{$Year->year_datum}</option>
                     {/foreach}
                  </select>
                  <input type="submit" value="Submit" class="year_sub">
               </form>
            </div>
            <div class="menjanje_sirine">
               <canvas id="lineChart"></canvas>
            </div>
         </div>
      </div>
      <script src="js/js_bootstrap/bootstrap.bundle.min.js"></script>
      <script>
         let niz_vrednosti_baza = [];
         
         let niz_meseci_baza = [];
         
         let niz_meseci = [1,2,3,4,5,6,7,8,9,10,11,12];
         
         
         {foreach $Rezultat as $Transakcija}
             niz_vrednosti_baza.push('{$Transakcija->sumirana_vrednost}');
             niz_meseci_baza.push('{$Transakcija->month_datum}');   
         {/foreach}
         
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
      </script>
      <script>
         const myChart2 = new Chart(
           document.getElementById('lineChart'),
           config2
         );
      </script>
      <script>
         document.getElementsByClassName("bojaspan")[0].style.color="#04acec!important;";
         
           
      </script>
   </body>
</html>