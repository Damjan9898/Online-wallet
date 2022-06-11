<?php

    function main()
    {

        global $db;

        
        $_SESSION['year'] = date("Y");


        $korisnik = $_SESSION['Korisnik'];

        $is_racun = mysqli_query($db, "select * from racun where user_id='$korisnik' LIMIT 1;");


        if(mysqli_error($db))
        {
            exit(mysqli_error($db));
        }

        $is_rac = mysqli_fetch_object($is_racun);

        if (isset($_SESSION['Korisnik']) and (!$is_rac))
        {
            exit(header("Location: ?akcija=dodaj_racun"));
        }

        if (!isset($_SESSION['racun']))
        {
            $_SESSION['racun'] = $is_rac->racun_id;
        }
       


        
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
function main1()
{

    global $db;

    $racun1 = $_SESSION['racun'];

    $rezultat1 = mysqli_query($db, "select transakcija.transakcija_id,transakcija.tip_transakcije, transakcija.naziv, transakcija.datum, transakcija.vrednost, kategorija.naziv_kategorije from ddwallet.transakcija INNER JOIN ddwallet.kategorija ON transakcija.kategorija_id = kategorija.kategorija_id WHERE transakcija.racun_id='$racun1';");
        
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

function main2()
{

        
        return;
}
function main3(){
    return;
}