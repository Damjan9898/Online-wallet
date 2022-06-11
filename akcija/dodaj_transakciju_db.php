<?php

function main()
{

    global $db;


    
    $naziv = mysqli_real_escape_string($db, $_REQUEST['naziv']);

    $vrednost = mysqli_real_escape_string($db, $_REQUEST['vrednost']);

    $kategorija = mysqli_real_escape_string($db, $_REQUEST['kategorija']);

    $racun = $_SESSION['racun'];

    $datum = date("Y/m/d h:i:sa");

    $tip = $_SESSION['tip_transakcije'];


    mysqli_query($db, "insert into transakcija (naziv, datum, vrednost, tip_transakcije, racun_id, kategorija_id) values ('$naziv', '$datum', '$vrednost', '$tip', '$racun', '$kategorija');");

    
    if(mysqli_error($db))
    {
        exit(mysqli_error($db));
    }


    exit(header("Location: ?"));


}
function main1()
{
    return;
}
function main2()
{
    return;
}
function main3(){
    return;
}