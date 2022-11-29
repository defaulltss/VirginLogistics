<?php 
require("inc/db.php");
$id = $_GET['id'] ? intval($_GET['id']) : 0;

try{

    $sql = "SELECT * 
    FROM ipasumi a
    INNER JOIN `users` b
    ON a.users_id = b.users_id
    WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

} catch (Exeption $e){
    echo "Error " . $e->getMessage();
    exit();
}

if(!$stmt->rowCount()){
    header("Location: ads-home.php");
    exit();
}
$ipasumi = $stmt->fetch();

// Datubāzes array
// var_dump($ipasumi);

?>

<?php
session_start();
include "template\access.php";
include "header.php";

?>

<h1>Show</h1>
<a href="ads-home.php"><--- Iet atpakaļ</a>
<table>
    <tr>
        <td>
        <img src='images\<?= $ipasumi['bilde'] ?>' style='max-width:255px;' />
        <td>
        <th>nosaukums</th>
        <td><?= $ipasumi['nosaukums'] ?></td>
        <th>vieta</th>
        <td><?= $ipasumi['vieta'] ?></td>
        <th>cena</th>
        <td><?= number_format($ipasumi['cena'], 2) ?></td>
        <th>stavs</th>
        <td><?= $ipasumi['stavs'] ?></td>
        <th>stavs</th>
        <td><?= $ipasumi['istabskaits'] ?></td>
        <th>platiba</th>
        <td><?= $ipasumi['platiba'] ?></td>
        <th>apraksts</th>
        <td><?= $ipasumi['apraksts'] ?></td>
    </tr>
</table>
    <br>
    <!-- Sludinājuma veidotāja kontakti, lietotājiem nav numurs tāpēc parasts teksts (random numurs) -->
    <h6>Kontakti</h6>
    <?= '<strong>',$ipasumi['users_firstname'],' ',$ipasumi['users_lastname'],'</strong><br>',$ipasumi['users_uid'],'<p>27722195<p>'?>