<?php

    session_start();

    if (!isset($_SESSION['Korisnik']) and  @$_REQUEST['akcija'] != "dodavanje_korisnika" and @$_REQUEST['akcija'] != "prijavljivanje" and @$_REQUEST['akcija'] != "dodavanje_korisnika_db")
    {
        exit(header("Location: ?akcija=prijavljivanje"));
    }


    //mysqli_connect ("host", "username", "password", "database_name")
    $db=mysqli_connect("localhost", "root", "", "ddwallet");

    if(!$db)
    {
        exit("Doslo je do greske sa povezivanje sa bazom!");
    }


    $akcija = trim(@$_REQUEST['akcija']);
    $akcija = (strlen($akcija) > 0) ? $akcija : 'main';

    //Require znaci da ukoliko se ne ucita fajl moze da se izvrsava dalji kod za razliku od include
    require_once "akcija/$akcija.php";
    $Rezultat = main();

    $Rezultat1 = main1();

    $Rezultat2 = main2();

    $Rezultat3 = main3();


    require_once "Smarty/libs/Smarty.class.php";
    $Smarty = new Smarty();
    $Smarty->assign('Rezultat', $Rezultat);
    $Smarty->assign('Rezultat1', $Rezultat1);
    $Smarty->assign('Rezultat2', $Rezultat2);
    $Smarty->assign('Rezultat3', $Rezultat3);
    $Smarty->display("akcija/$akcija.tpl");