<?php

function main(){
    
    global $db;

    $racun = $_SESSION['racun'];

    
    $godina = $_SESSION['year'];

    $rezultat = mysqli_query($db, "select SUM(vrednost) sumirana_vrednost, MONTH(datum) as month_datum, YEAR(datum) as year_datum  from transakcija where racun_id = '$racun'  and YEAR(datum)='$godina' group by month_datum;");

        
    if(mysqli_error($db))
    {
            exit(mysqli_error($db));
    }

    $Rezultati = [];

        
        while($Rezultat = mysqli_fetch_object($rezultat))
        {
            $Rezultati[] = $Rezultat;
        }
        
        return $Rezultati;
}
function main1()
{
    global $db;

    $racun2 = $_SESSION['racun'];


    $rezultat2 = mysqli_query($db, "select YEAR(datum) as year_datum  from transakcija where racun_id = '$racun2' group by year_datum;");

        
    if(mysqli_error($db))
    {
            exit(mysqli_error($db));
    }

    $Rezultati2 = [];

        
        while($Rezultat2 = mysqli_fetch_object($rezultat2))
        {
            $Rezultati2[] = $Rezultat2;
        }
        
        return $Rezultati2;
}
function main2()
{

    global $db;


    $korisnik = $_SESSION['Korisnik'];

    $rezultat = mysqli_query($db, "select * from user INNER JOIN racun ON user.user_id = racun.user_id WHERE user.user_id='$korisnik';");
        
        if(mysqli_error($db))
        {
            exit(mysqli_error($db));
        }
        
        $Rezultati = [];

        
        
        while($Rezultat = mysqli_fetch_object($rezultat))
        {
            $Rezultati[] = $Rezultat;
        }
        
        return $Rezultati;
}
function main3(){
    return;
}