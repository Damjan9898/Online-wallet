<?php

function main()
{

    global $db;


    
    $naziv = mysqli_real_escape_string($db, $_REQUEST['naziv']);

    $racun = $_SESSION['racun'];    

    $tip = $_SESSION['tip_transakcije'];


    mysqli_query($db, "insert into kategorija (naziv_kategorije, tip_transakcije, racun) values ('$naziv', '$tip', '$racun');");




    if(mysqli_error($db))
   {
        exit(mysqli_error($db));
    }


    exit(header("Location: ?akcija=dodaj_transakciju&tip_trans=$tip"));


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