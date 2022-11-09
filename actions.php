<?php
# Pievienot, rediģēt un dzēst sludinājumus
include "template/access.php";
include "header.php";
// include "./template/functions.php"; // db savienojums -NEDER-
?>

<script>
  function submit_form() {
document.ievade.submit();
document.ievade.reset(); 
}
</script>

<html>
<button id="ievadeee" name="pievienot" onclick="document.getElementById('ievadeee').style.display = 'none';document.getElementById('ievadee').style.display = ''">Pievienot Sludinājumu</button> <!-- Nospiežot, parādās ievades logs | Divi "e" burti ID ir dizaina specifika, lai nerastos problēmas ar .css failu -->

<div id="ievadee" style="display:none">
  <!-- Pievieno jaunu sludinājumu 
  * brīva vieta jūsu reklāmai *
  name=.. aiziet uz sludinajums.inc.php
-->
  <form name="ievade" action="inc\sludinajums.inc.php" method="POST">
    <!-- <label for="myfile"> Pievienot bildi: </label>
    <input type="file" id="myfile" name="myfile" />
    <br></br> 
  ---BILDI NEVAJAG---
  -->
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
    <input type="text" name="istbskaits" placeholder="4" required>
    <br></br>
    <label>Platība: </label>
    <input type="text" name="platiba" placeholder="200" required> <label>m2</label>
    <br></br>
    <label>Apraksts: </label>
    <input type="text" name="apraksts" placeholder="Tīrs, mājīgs dzīvoklis" required>
  </form>
  <br>
  <button name="nosutit" onclick="submit_form();document.getElementById('ievadeee').style.display = '';document.getElementById('ievadee').style.display = 'none'">Nosūtīt</button>
</div>

<div class="sludinajumi">

    *Te parādīsies sludinājumi*
    <br>
    (man vajag šo tekstu redzēt)

</div>
</html>
