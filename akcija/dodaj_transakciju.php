<?php

function main()
{

    global $db;

    $racun2 = $_SESSION['racun'];

    $tip_trans2 = (int) $_REQUEST['tip_trans'];

    $_SESSION['tip_transakcije'] = $tip_trans2;

    $rezultat2 = mysqli_query($db, "SELECT racun, naziv_kategorije, kategorija_id FROM ddwallet.kategorija where racun='$racun2' and tip_transakcije='$tip_trans2' group by naziv_kategorije;");
    
    

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
function main1()
{
    global $db;

    $racun = $_SESSION['racun'];

    $tip_trans = (int) $_REQUEST['tip_trans'];

    $_SESSION['tip_transakcije'] = $tip_trans;

    $rezultat1 = mysqli_query($db, "select DISTINCT naziv_kategorije, kategorija.tip_transakcije, kategorija.kategorija_id, kategorija.racun from transakcija INNER JOIN kategorija ON transakcija.racun_id = kategorija.racun WHERE transakcija.racun_id='$racun';");
    
    

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