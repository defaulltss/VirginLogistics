<?php // nesaprotu šitos, tādēļ kopēju no ./signup.inc.php un pielāgoju savām vajadzībām

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    // Grabbing data
    //$myfile = $_POST["image"]; -UNUSED-
    $nosaukums = $_POST["nosaukums"];
    $cena = $_POST["cena"];
    $vieta = $_POST["vieta"];
    $stavs = $_POST["stavs"];
    $istbskaits = $_POST["istb-skaits"];
    $platiba = $_POST["platiba"];
    $apraksts = $_POST["apraksts"];
    

    // Instantitate SignupContr class ( ordering is important db -> classes -> contr )
    //include '../classes/dbh.classes.php';
    //include '../classes/signup.classes.php';
    //include '../classes/signup-contr.classes.php'; --ak dievs, es domāju šitie ir kaut kādi packages kā python, nevis paštaisīti faili...
    // kaut kad jāuztaisa...bāc...

    $pievienot = new SignupContr($nosaukums, $cena, $vieta, $stavs, $istbskaits, $platiba, $apraksts);


    // Running error handlere and user signup
    //$signup->signupUser();

    // Going to back to front page
    header("location: ../login.php?error=none");

}
?>