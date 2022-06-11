<?php

function main()
{
    global $db;
    
    $username = mysqli_real_escape_string($db, $_POST['korisnik']);
    $password = mysqli_real_escape_string($db, $_POST['lozinka']);
    
    mysqli_query($db, "insert into user (username, password ) values ('$username', '$password');");

    $user_id = mysqli_query($db, "select user_id from user where username='$username';");
    
    if(mysqli_error($db))
    {
        exit(mysqli_error($db));
    }

    $Use = mysqli_fetch_object($user_id);

    $_SESSION['Korisnik'] = $Use->user_id;
    
    exit(header('Location: ?'));
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