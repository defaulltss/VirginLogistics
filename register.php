<?php
session_start();
include "template\access.php";
include "header.php";
?>

<div class="container">
    <h2>Reģistrēties portālā!</h2>
    <?php
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (strpos($fullUrl, "error=email") == true) {
            echo "<p class='error'>E-pasts nav pareizajā formātā!<p>";
        }
        elseif (strpos($fullUrl, "error=passwordmatch") == true) {
            echo "<p class='error'>Jūsu paroles nesakrīt!<p>";
        }
        elseif (strpos($fullUrl, "error=useroremailtaken") == true) {
            echo "<p class='error'>Lietotājs ar tādu e-pastu jau eksistē!<p>";
        }
    ?>
    <form action="inc\signup.inc.php" method="POST">
        <input type="text" name="firstname" placeholder="Vārds" required><br>
        <input type="text" name="lastname" placeholder="Uzvārds" required><br>
        <input type="text" name="uid" placeholder="E-pasts" required><br>
        <input type="password" name="pwd" placeholder="Jūsu parole" required><br>
        <input type="password" name="pwdrepeat" placeholder="Atkārtojiet paroli" required>
        <br>
        <button type="submit" name="submit">Reģistrēties</button>
    </form>
</div>


<?php include 'footer.php'?>