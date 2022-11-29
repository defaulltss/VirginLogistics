<?php
session_start();
include "template\access.php";
include "header.php";
?>

<h1>Ievietot sludinājumu</h1>

<a href="listings.php">Atpakaļ</a>
<?php if (isset($_GET['status']) && $_GET['status'] == "fail_create") : ?>
<p style="color:red;">
    Neizdevās izveidot sludinājumu! 
</p>
<?php endif ?>
<form class="forma" action="add.php" method="POST" enctype ="multipart/form-data">
    <label><b>Nosaukums:</b></label>
    <input class="slud_name" type="text" name="nosaukums" placeholder=" Smuks pierīgas dzīvoklis" required>
    <br></br>
    <label><b>Cena:</b></label>
    <input class="slud_cost" type="text" name="cena" placeholder=" 50" required> <label><b>€/mēn</b></label>
    <br></br>
    <label><b>Vieta:</b></label>
    <input class="slud_name" type="text" name="vieta" placeholder=" Jāņa Iela 9" required>
    <br></br>
    <label><b>Stāvs:</b></label>
    <input class="slud_cost" type="text" name="stavs" placeholder=" 1" required>
    <br></br>
    <label><b>Istabu skaits:</b></label>
    <input class="slud_cost" type="text" name="istabskaits" placeholder=" 4" required>
    <br></br>
    <label><b>Platība:</b></label>
    <input class="slud_cost" type="text" name="platiba" placeholder=" 200" required> <label><b>m2</b></label>
    <br></br>
    <p><b>Apraksts:</b></p>
    <textarea class="slud_desc" type="text" name="apraksts" placeholder="Tīrs, mājīgs dzīvoklis" required></textarea>
    <br>
    <br>
    <label><b>Bilde:</b></label>
    <input class="slud_photo" type="file" required name="bilde">
    <br>
    <br>
    <button type="sumbit">Pievienot sludinājumu</button>  
</form>
<?php include 'footer.php'?>