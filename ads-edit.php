<?php 
require("inc/db.php");
$id = $_GET['id'] ? intval($_GET['id']) : 0;

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
    header("Location: ads-home.php");
    exit();
}
$ipasumi = $stmt->fetch();
?>

<?php
session_start();
include "template\access.php";
include "header.php";
?>

<h1>Edit</h1>
<a href="ads-mine.php"><--- Iet atpakaļ</a>
    <?php if (isset($_GET['status']) && $_GET['status'] == "updated") : ?>
    <p style="color:red;">
        Sludinājuma informācija atjaunināta! 
    </p>
    <?php elseif (isset($_GET['status']) && $_GET['status'] == "fail_update") : ?>
    <p style="color:red;">
        Neizdevās atjaunināt sludinājumu! 
    </p>
<?php elseif($ipasumi['users_id']==$row['users_id']):?>
<form class="forma" action="ads-update.php" method="POST">
    <input type="hidden" name="id" value="<?= $ipasumi['id']?>">
    <label><b>Nosaukums:</b></label>
    <input class="slud_name" type="text" name="nosaukums" placeholder="Trīsistabu dzīvoklis" required value="<?= $ipasumi['nosaukums']?>">
    <br></br>
    <label><b>Cena:</b></label>
    <input class="slud_cost" type="text" name="cena" placeholder="50" required value="<?= $ipasumi['cena']?>"> <label>€/mēn</label>
    <br></br>
    <label><b>Vieta:</b></label>
    <input class="slud_name" type="text" name="vieta" placeholder="Ielas Iela 9" required value="<?= $ipasumi['vieta']?>">
    <br></br>
    <label><b>Stāvs:</b></label>
    <input class="slud_cost" type="text" name="stavs" placeholder="1" required value="<?= $ipasumi['stavs']?>">
    <br></br>
    <label><b>Istabu skaits:</b></label>
    <input class="slud_cost" type="text" name="istabskaits" placeholder="4" required value="<?= $ipasumi['istabskaits']?>">
    <br></br>
    <label><b>Platība:</b></label>
    <input class="slud_cost" type="text" name="platiba" placeholder="200" required value="<?= $ipasumi['platiba']?>"> <label>m2</label>
    <br></br>
    <label><b>Apraksts:</b></label>
    <input class="slud_desc" type="text" name="apraksts" placeholder="Tīrs, mājīgs dzīvoklis" required value="<?= $ipasumi['apraksts']?>">
    <br>
    <br>
    <button type="sumbit">Labot sludinājumu</button>  
</form>
<?php endif; ?>





