<?php 
require("inc/db.php");
session_start();


require('template\functions.php');
if(isset($_SESSION['userid']))
{
$id = $_SESSION['userid'];
$row = db_query("select * from users where users_id = :users_id limit 1",['users_id'=>$id]);
if($row)
{
    $row = $row[0];
}
}

if($_POST) {
    $nosaukums = trim($_POST["nosaukums"]);
    $cena = (float) $_POST["cena"];
    $vieta = trim($_POST["vieta"]);
    $stavs = (int) $_POST["stavs"];
    $istabskaits = (int) $_POST["istabskaits"];
    $platiba = (int) $_POST["platiba"];
    $apraksts = trim($_POST["apraksts"]);
    $users_id = $row['users_id'];

    $bilde = $_FILES['bilde']['name'];

    $info = getimagesize($_FILES['bilde']['tmp_name']);
    $allowedTypes = [IMAGETYPE_JPEG=>'.jpeg', IMAGETYPE_PNG=>'.png'];
    $path = getcwd().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR;
    $filename = uniqid().$allowedTypes[$info[2]];

    try {
        $sql = "INSERT INTO ipasumi(nosaukums, cena, vieta, stavs, istabskaits, platiba, apraksts, users_id, bilde)
                VALUES(:nosaukums, :cena, :vieta, :stavs, :istabskaits, :platiba, :apraksts, :users_id, '$filename')";
    
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":nosaukums", $nosaukums);
        $stmt->bindParam(":cena", $cena);
        $stmt->bindParam(":vieta", $vieta);
        $stmt->bindParam(":stavs", $stavs);
        $stmt->bindParam(":istabskaits", $istabskaits);
        $stmt->bindParam(":platiba", $platiba);
        $stmt->bindParam(":apraksts", $apraksts);
        $stmt->bindParam(":users_id", $users_id);
        $stmt->execute();

        if ($stmt->rowCount()) {


            move_uploaded_file($_FILES['bilde']['tmp_name'], $path.$filename);

            header("Location: ads-home.php?status=created");
            exit();
        }
        header("Location: ads-create.php?status=fail_create");
        exit();
    
    } catch(Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
    }


} else {
    header("Location: ads-create.php?status=fail_create");
    exit();
}

?>