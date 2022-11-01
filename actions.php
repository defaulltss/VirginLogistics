<?php
# Pievienot, rediģēt un dzēst sludinājumus
include "template/access.php";
include "header.php";
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
  FORMAI VAJAG action="" UN method=""
-->
  <form name="ievade">
    <label for="myfile"> Pievienot bildi: </label>
    <input type="file" id="myfile" name="myfile" />
    <br></br>
    <label>Apraksts :</label>
    <input type="text" name="apraksts" placeholder="Tīrs, mājīgs dzīvoklis" required>
    <br></br>
    <label>cena:</label>
    <input type="text" name="Cena" placeholder="50" required> <label>€/mēn</label>
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
