<?php
session_start();
include "template\access.php";
include "header.php";
?>

<h1>Create</h1>

<a href="ads-home.php"><--- Iet atpakaļ</a>
<?php if (isset($_GET['status']) && $_GET['status'] == "fail_create") : ?>
<p style="color:red;">
    Neizdevās izveidot sludinājumu! 
</p>
<?php endif ?>
<form action="add.php" method="POST" enctype ="multipart/form-data">
    <label>Nosaukums: </label>
    <input type="text" name="nosaukums" placeholder="Trīsistabu dzīvoklis" required>
    <br></br>
    <label>Cena: </label>
    <input type="text" name="cena" placeholder="50" required> <label>€/mēn</label>
    <br></br>
    <label>Vieta: </label>
    <input type="text" name="vieta" placeholder="Ielas Iela 9" required>
    <br></br>
    <label>Stāvs: </label>
    <input type="text" name="stavs" placeholder="1" required>
    <br></br>
    <label>Istabu skaits: </label>
    <input type="text" name="istabskaits" placeholder="4" required>
    <br></br>
    <label>Platība: </label>
    <input type="text" name="platiba" placeholder="200" required> <label>m2</label>
    <br></br>
    <label>Apraksts: </label>
    <input type="text" name="apraksts" placeholder="Tīrs, mājīgs dzīvoklis" required>
    <br>
    <label>Bilde</label>
    <input type="file" required name="bilde">
    <br>

    <button type="sumbit">pievienot</button>  
</form>