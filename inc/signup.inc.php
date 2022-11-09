<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    // Grabbing data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    // Instantitate SignupContr class ( ordering is important db -> classes -> contr )
    include '../classes/dbh.classes.php';
    include '../classes/signup.classes.php';
    include '../classes/signup-contr.classes.php';

    $signup = new SignupContr($firstname, $lastname, $pwd, $pwdRepeat, $uid);


    // Running error handlere and user signup
    $signup->signupUser();

    // Going to back to front page
    ?><script>
        alert("Konts izveidots!");
        window.location.replace('../index.php');
    </script><?php
    // header("location: ../index.php");


}
?>