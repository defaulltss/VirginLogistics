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
<a href="listings.php">Atpakaļ uz sludinājumu lapu</a>
<div class="row">
    <div class="column_img">
        <img class="sludinajuma_img" src='images\<?= $ipasumi['bilde'] ?>' style='max-width:255px;' />
    </div>
    <div class="column_desc">
        <b><?= $ipasumi['nosaukums'] ?></b>
        <p><?= number_format($ipasumi['cena'], 0) ?> €/mēn</p>
        <p>Atrašanās vieta <?= $ipasumi['vieta'] ?></p>
        <p>Stāvs <?= $ipasumi['stavs'] ?></p>
        <p>Istabu skaits <?= $ipasumi['istabskaits'] ?></p>
        <p>Platība <?= $ipasumi['platiba'] ?> m2</p>
        <div style="width: 200px; margin-top: 10px;">
            <p><?= $ipasumi['apraksts'] ?></p>
        </div>
    </div>
</div>
<div>
    <h6>Kontakti</h6>
    <?= '<strong>',$ipasumi['users_firstname'],' ',$ipasumi['users_lastname'],'</strong><br>',$ipasumi['users_uid'],'<p>27722195<p>'?>
</div>
    <!-- Sludinājuma veidotāja kontakti, lietotājiem nav numurs tāpēc parasts teksts (random numurs) -->