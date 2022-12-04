<?php
session_start();
include "header.php";
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



try{
    $sql = "SELECT * FROM ipasumi WHERE id = :id LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
} catch (Exeption $e){
    echo "Error " . $e->getMessage();
    exit();
}

if(!$stmt->rowCount()){
    // header("Location: ads-home.php");
    // exit();
}
$ipasumi = $stmt->fetch();


$id = $_SESSION['userid'];
$row = db_query("select * from users where users_id = :users_id limit 1",['users_id'=>$id]);
if($row)
{
    $row = $row[0];
}
?>
