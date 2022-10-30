<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    // Grabbing data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // Instantitate SignupContr class ( ordering is important db -> classes -> contr )
    include '../classes/dbh.classes.php';
    include '../classes/login.classes.php';
    include '../classes/login-contr.classes.php';
    $login = new LoginContr($uid, $pwd);


    // Running error handlere and user login
    $login->loginUser();

    // Going to back to front page
    header("location: ../index.php?error=none");

}
?>