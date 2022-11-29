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
<a href="ads-home.php"><--- Iet atpakaļ</a>
    <?php if (isset($_GET['status']) && $_GET['status'] == "updated") : ?>
    <p style="color:red;">
        Sludinājuma informācija atjaunināta! 
    </p>
    <?php elseif (isset($_GET['status']) && $_GET['status'] == "fail_update") : ?>
    <p style="color:red;">
        Neizdevās atjaunināt sludinājumu! 
    </p>
<?php elseif($ipasumi['users_id']==$row['users_id']):?>
<form action="ads-update.php" method="POST">
    <input type="hidden" name="id" value="<?= $ipasumi['id']?>">
    <label>Nosaukums: </label>
    <input type="text" name="nosaukums" placeholder="Trīsistabu dzīvoklis" required value="<?= $ipasumi['nosaukums']?>">
    <br></br>
    <label>Cena: </label>
    <input type="text" name="cena" placeholder="50" required value="<?= $ipasumi['cena']?>"> <label>€/mēn</label>
    <br></br>
    <label>Vieta: </label>
    <input type="text" name="vieta" placeholder="Ielas Iela 9" required value="<?= $ipasumi['vieta']?>">
    <br></br>
    <label>Stāvs: </label>
    <input type="text" name="stavs" placeholder="1" required value="<?= $ipasumi['stavs']?>">
    <br></br>
    <label>Istabu skaits: </label>
    <input type="text" name="istabskaits" placeholder="4" required value="<?= $ipasumi['istabskaits']?>">
    <br></br>
    <label>Platība: </label>
    <input type="text" name="platiba" placeholder="200" required value="<?= $ipasumi['platiba']?>"> <label>m2</label>
    <br></br>
    <label>Apraksts: </label>
    <input type="text" name="apraksts" placeholder="Tīrs, mājīgs dzīvoklis" required value="<?= $ipasumi['apraksts']?>">
    <br>
    <button type="sumbit">pievienot</button>  
</form>
<?php endif; ?>





