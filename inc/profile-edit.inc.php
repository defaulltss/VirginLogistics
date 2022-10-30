<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    // Grabbing data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];


    // Instantitate SignupContr class ( ordering is important db -> classes -> contr )
    include '../classes/dbh.classes.php';
    include '../classes/profile-edit.classes.php';
    include '../classes/profile-edit.classes.php';
    $edit = new EditContr($uid, $pwd, $pwdRepeat, $email);


    // Running error handlere and user signup
    $edit->EditUser();

    // Going to back to front page
    header("location: ../profile.php?error=none");

}
?>