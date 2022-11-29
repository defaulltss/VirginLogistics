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
<h1>MINE</h1>
<a href="ads-create.php">pievienot</a>

<table>
        <tr>
            <th>Nosaukums</th>
            <th>Vieta</th>
            <th>Cena</th>
        </tr>

    <?php if ($result->rowCount() > 0) : ?>
    
        <?php foreach ($result as $ipasumi) : ?>
        <?php if($_SESSION['userid'] == $ipasumi['users_id']):?>  
        <tr>
            <td><?= $ipasumi['nosaukums'] ?></td>
            <td><?= $ipasumi['vieta'] ?></td>
            <td><?= number_format($ipasumi['cena'], 2) ?></td>
        <td>
            
            <a href="ads-show.php?id=<?=$ipasumi['id']?>">show</a>
            <a href="ads-edit.php?id=<?=$ipasumi['id']?>">edit</a>
            <a href="ads-delete.php?id=<?=$ipasumi['id']?>" onclick="return confirm('Esiet pārliecināts, ka gribiet dzēst <?= $ipasumi['nosaukums']?>?');">Delete</a>
        </div>
        </div>
        </td>
        <?php endif ?>
        <?php endforeach ?>

    <?php endif ?>

        </tr>
</table>
