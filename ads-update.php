<?php 
require("inc/db.php");

if($_POST) {
    $id = (int) $_POST['id'];
    $nosaukums = trim($_POST["nosaukums"]);
    $cena = (float) $_POST["cena"];
    $vieta = trim($_POST["vieta"]);
    $stavs = (int) $_POST["stavs"];
    $istabskaits = (int) $_POST["istabskaits"];
    $platiba = (int) $_POST["platiba"];
    $apraksts = trim($_POST["apraksts"]);

    try {
        $sql = 'UPDATE ipasumi 
                SET nosaukums = :nosaukums, cena = :cena, vieta = :vieta, stavs = :stavs, istabskaits = :istabskaits, platiba = :platiba, apraksts = :apraksts 
                WHERE id = :id';
    
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":nosaukums", $nosaukums);
        $stmt->bindParam(":cena", $cena);
        $stmt->bindParam(":vieta", $vieta);
        $stmt->bindParam(":stavs", $stavs);
        $stmt->bindParam(":istabskaits", $istabskaits);
        $stmt->bindParam(":platiba", $platiba);
        $stmt->bindParam(":apraksts", $apraksts);
        $stmt->bindParam("id", $id);
        $stmt->execute();
        if ($stmt->rowCount()) {
            header("Location: ads-edit.php?id=".$id."&status=updated");
            exit();
        }
        header("Location: ads-edit.php?id=".$id."&status=fail_update");
        exit();
    
    } catch(Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
    }


} else {
    header("Location: ads-edit.php?id=".$id."&status=fail_update");
    exit();
}

?>