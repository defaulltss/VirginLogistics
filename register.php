<?php
session_start();
include "template\access.php";
include "header.php";
?>
<div class="container">
    <h2 class="pieslegties">Reģistrēties</h2>
    <br>
    <hr>
    <br>
    <p>Ievadiet visus vajadzigos datus</p>
    <?php
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (strpos($fullUrl, "error=usernotfound") == true) {
            echo "<p class='error'>Lietotājs netika atrasts!<p>";
        }
        elseif (strpos($fullUrl, "error=email") == true) {
            echo "<p class='error'>Nepareizs e-pasta formāts!<p>";
        }
        elseif (strpos($fullUrl, "error=passwordmatch") == true) {
            echo "<p class='error'>Paroles nesakrīt!<p>";
        }
        elseif (strpos($fullUrl, "error=useroremailtaken") == true) {
            echo "<p class='error'>Konts ar šādu e-pastu pastāv!<p>";
        }
    ?>
    <br>
    <br>
    <form class="register__page" action="inc\signup.inc.php" method="POST">
        <p>Vārds</p>
        <input type="text" class="info" name="firstname" required>
        <p>Uzvārds</p>
        <input type="text" class="info" name="lastname" required>

        <p>E-pasts</p>
        <input type="text" class="info" name="uid" required>
        <br><br>
        <p>Parole</p>
        <input type="password" class="info" name="pwd" required>
        <p>Parole atkārtoti</p>
        <input type="password" class="info" name="pwdrepeat" required>
        <br><br>
        <button type="submit" name="submit">Reģistrēties</button>
    </form>
</div>



<?php include 'footer.php'?>