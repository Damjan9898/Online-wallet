<?php

function main()
{

    global $db;
    
    $account = mysqli_real_escape_string($db, $_REQUEST['account']);

    $currency = mysqli_real_escape_string($db, $_REQUEST['currency']);

    $korisnik = $_SESSION['Korisnik'];


    mysqli_query($db, "insert into racun (valuta, user_id, naziv) values ('$currency', '$korisnik', '$account' );");

    $racun_id = mysqli_query($db, "select racun_id from racun where naziv='$account';");


    if(mysqli_error($db))
    {
        exit(mysqli_error($db));
    }


    $Rac = mysqli_fetch_object($racun_id);

        $_SESSION['racun']= $Rac->racun_id;

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