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
<a href="listings.php">Atpakaļ</a>
<div class="cons">

    <div class="column_img">
        <img class="sludinajuma_img" src='images\<?= $ipasumi['bilde'] ?>' style='max-width:255px;' />
    </div>
    <div class="column_desc">
        <p><?= number_format($ipasumi['cena'], 0) ?></p><strong>€/mēn</strong><br><br>
        <strong>Atrašanās vieta</strong><p> <?= $ipasumi['vieta'] ?></p>
        <strong>Stāvs </strong><p> <?= $ipasumi['stavs'] ?></p>
        <strong>Istabu skaits </strong><p> <?= $ipasumi['istabskaits'] ?></p>
        <strong>Platība </strong><p> <?= $ipasumi['platiba'] ?> m2</p>
        <div style="width: 200px; margin-top: 10px;">
            <p><?= $ipasumi['apraksts'] ?></p>
        <br>
        </div>
    </div>

<div>
    <h6>Kontakti</h6>
    <?= '<strong>',$ipasumi['users_firstname'],' ',$ipasumi['users_lastname'],'</strong><br>',$ipasumi['users_uid'],'<p>27722195<p>'?>
</div>

    <!-- Sludinājuma veidotāja kontakti, lietotājiem nav numurs tāpēc parasts teksts (random numurs) -->