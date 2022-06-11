<?php

function main()
{
    global $db;
    
    $Transakcija_id = (int) $_REQUEST['Transakcija_id'];
    
    
    mysqli_query($db, "delete from transakcija where transakcija_id='$Transakcija_id';");
    
    if(mysqli_error($db))
    {
        exit(mysqli_error($db));
    }
    
    exit(header("Location: ?"));

    return;

}
function main1()
{
    return;

}
function main2()
{
    return;

}

function main3()
{
    return;

}
