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

<div class="Filters">
        <!-- <h2>Cena</h2>
        <br> 
    <div class="form_no_lidz">
        <input type="text" id="cena_no" class="cena"> līdz <input type="text" id="cena_lidz" class="cena">
    </div>
        <br><br>
        <h2>Atrašanās vieta</h2>
        <br>
        <input type="text" placeholder="Meklēšana" class="meklet">
        <br><br>
    <div>
        <input type="checkbox"> Rīga
        <input type="checkbox"> Liepāja
        <input type="checkbox"> Tukums
        <input type="checkbox"> Jelgava
        <a href="">Rādīt vairāk</a>
    </div>
        <br><br>
        <h2>Platība</h2>
        <br>
    <div class="form_no_lidz">
        <input type="text" id="platiba_no" class="platiba"> līdz <input type="text" id="platiba_lidz" class="platiba">
    </div>
    <br><br>
    <div>
        <button><a>Filtrēt</a></button>
    </div> -->
</div>
<div class="Listings">
    <h2>Sludinājumi</h2>
    <div class="sludinajums">
        <?php if ($result->rowCount() > 0) : ?>
            <?php foreach ($result as $ipasumi) : ?>
                <a href="ads-show.php?id=<?=$ipasumi['id']?>" class="click_slud">
                    <div class="slud">
                        <img class="slud_bilde" src='images\<?= $ipasumi['bilde'] ?>' />
                        <div class="sludteksts">
                            <a><?= $ipasumi['vieta'] ?></a><br>
                            <a><?= number_format($ipasumi['cena'], 0) ?> €/mēn</a><br>
                        </div>
                    </div>
                </a>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</div>

<?php include 'footer.php'?>