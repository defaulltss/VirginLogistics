<?php
session_start();
include "template\access.php";
include "header.php";
?>
<?php 
require("inc/db.php");
try {
    // SQL statment
    $sql = "SELECT * FROM ipasumi";
    $result = $conn->query($sql);

} catch (Exception $e){
    echo "Error ". $e->getMessage();
    exit();
}    

?>

<h1>HOME</h1>
<?php if (isset($_GET['status']) && $_GET['status'] == "deleted") : ?>
<p style="color:red;">
    <strong>Sludinājums izdzēsts!</strong>
</p>
<?php elseif (isset($_GET['status']) && $_GET['status'] == "fail_delete") : ?>
<p style="color:red;">
    <strong>Neizdevās sludinājumu izdzēst!</strong>
</p>
<?php endif ?>
<table>
        <tr>
            <th>Bilde</th>
            <th>Vieta</th>
            <th>Cena ( eur/mēn )</th>
        </tr>

    <?php if ($result->rowCount() > 0) : ?>
        <?php foreach ($result as $ipasumi) : ?>
        <tr>
            <td>
            <img src='images\<?= $ipasumi['bilde'] ?>' style='max-width:100px;' />
            </td>
            <td><?= $ipasumi['vieta'] ?></td>
            <td><?= number_format($ipasumi['cena'], 2) ?></td>
        <td>
            <a href="ads-show.php?id=<?=$ipasumi['id']?>">show</a>
        </div>
        </div>
        </td>
        </tr>
        <?php endforeach ?>
    <?php endif ?>
</table>
