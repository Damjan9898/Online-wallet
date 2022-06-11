<?php

function main()
{
    global $db;
    
    if (!isset($_REQUEST['korisnik']) or !isset($_REQUEST['lozinka']))
    {
        return;
    }
	
	

    $username = mysqli_real_escape_string($db, $_REQUEST['korisnik']);

    $password = mysqli_real_escape_string($db, $_REQUEST['lozinka']);
	



    $Korisnik = mysqli_query($db, "select * from user where username='$username' and password='$password';");

    $user_id = mysqli_query($db, "select user_id from user where username='$username';");

        
    if(mysqli_error($db))
    {
        exit(mysqli_error($db));
    }


    $Rez = mysqli_fetch_object($Korisnik);

    $Use = mysqli_fetch_object($user_id);


    if ($Rez)
    {
        $_SESSION['Korisnik'] = $Use->user_id;

        exit(header("Location: ?"));
    }else
    {
        return "Username or password is incorrect";
    }

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