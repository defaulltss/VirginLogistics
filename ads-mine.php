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
<div style="text-align: center;">
<h1>Mani sludinājumi</h1>

<br>
<table>
    <tr>
        <th class="slud_element">Nosaukums</th>
        <th class="slud_element">Vieta</th>
        <th class="slud_element">Cena ( €/mēn )</th>
        <th class="slud_element">Opcijas</th>
    </tr>
    <?php if ($result->rowCount() > 0) : ?>
        <?php foreach ($result as $ipasumi) : ?>
        <?php if($_SESSION['userid'] == $ipasumi['users_id']):?>  
        <tr>
            <td class="slud_info"><?= $ipasumi['nosaukums'] ?></td>
            <td class="slud_info"><?= $ipasumi['vieta'] ?></td>
            <td class="slud_info"><?= number_format($ipasumi['cena'], 0) ?></td>
        <td class="slud_info">      
            <a href="ads-show.php?id=<?=$ipasumi['id']?>">Parādīt</a>
            <a href="ads-edit.php?id=<?=$ipasumi['id']?>">Mainīt</a>
            <a href="ads-delete.php?id=<?=$ipasumi['id']?>" onclick="return confirm('Esiet pārliecināts, ka gribiet dzēst <?= $ipasumi['nosaukums']?>?');">Dzēst</a>
        </div>
        </div>
        </td>
        <?php endif ?>
        <?php endforeach ?>
    <?php endif ?>
        </tr>
</table>
</div>