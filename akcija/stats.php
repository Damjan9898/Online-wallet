<?php

function main(){
    
    global $db;

    $racun1 = $_SESSION['racun'];


    $rezultat1 = mysqli_query($db, "select naziv_kategorije, SUM(vrednost) as vrednost_kat,  datum from kategorija INNER JOIN transakcija on kategorija.kategorija_id = transakcija.kategorija_id where racun_id='$racun1' and MONTH(datum) = MONTH(CURRENT_TIMESTAMP) and transakcija.tip_transakcije=0 GROUP BY naziv_kategorije;");

        
    if(mysqli_error($db))
    {
            exit(mysqli_error($db));
    }

    $Rezultati1 = [];

        
        while($Rezultat1 = mysqli_fetch_object($rezultat1))
        {
            $Rezultati1[] = $Rezultat1;
        }
        
        return $Rezultati1;
}
function main1()
{
    global $db;

    $racun2 = $_SESSION['racun'];


    $rezultat2 = mysqli_query($db, "select naziv_kategorije, SUM(vrednost) as vrednost_kat,  datum from kategorija INNER JOIN transakcija on kategorija.kategorija_id = transakcija.kategorija_id where racun_id='$racun2' and MONTH(datum) = MONTH(CURRENT_TIMESTAMP) and transakcija.tip_transakcije=1 GROUP BY naziv_kategorije;");

        
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

    $racun3 = $_SESSION['racun'];


    $rezultat3 = mysqli_query($db, "select SUM(vrednost) as sumirana_vrednost, DAY(datum) as day_datum from transakcija where racun_id='$racun3' group by day_datum;");

        
    if(mysqli_error($db))
    {
            exit(mysqli_error($db));
    }

    $Rezultati3 = [];

        
        while($Rezultat3 = mysqli_fetch_object($rezultat3))
        {
            $Rezultati3[] = $Rezultat3;
        }
        
        return $Rezultati3;
}
function main3(){

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
