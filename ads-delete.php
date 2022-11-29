<?php 
require("inc/db.php");

if($ipasumi['users_id']==$row['users_id']):
if (isset($_GET['id'])) {

    try {
        // SQL Statement
        $sql = 'DELETE FROM ipasumi WHERE id = :id LIMIT 1';
        unlink(images/$ipasumi['bilde']);
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $_GET['id'], PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount()) {
            header("Location: ads-mine.php?status=deleted");
            exit();
        }
        header("Location: ads-mine.php?status=fail_delete");
        exit();
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
    }
} else {
    // Redirect to ads-home.php
    header("Location: ads-mine.php?status=fail_delete");
    exit();
}
endif;