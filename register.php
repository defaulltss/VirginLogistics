<?php
session_start();
include "template\access.php";
include "header.php";
?>

<div class="index-login-signup">
    <h2 style="text-align:center;">Reģistrēties</h2>
    <hr>
    <h3 style="text-align:center;">Ievadiet visus vajadzigos datus</h3>
    <br>
    <br>
    <form action="inc\signup.inc.php" method="POST">
        <h4 style="text-align:center;">Vārds Uzvārds</h4>
        <input style="position:relative; left:30%;" type="text" class="info" name="firstname" placeholder="Vārds" required>
        <input style="position:relative; left:200px;" type="text" class="info" name="lastname" placeholder="Uzvārds" required>
        <br>
        <br>
        <h4 style="text-align:center;">E-pasts</h4>
        <input style="position:relative; left:30%;" type="text" class="info" name="uid" placeholder="E-pasts" required>
        <br>
        <br>
        <h4 style="text-align:center;">Parole</h4>
        <input style="position:relative; left:30%;" type="password" class="info" name="pwd" placeholder="Jūsu parole" required>
        <input style="position:relative; left:200px;" type="password" class="info" name="pwdrepeat" placeholder="Atkārtojiet paroli" required>
        <br>
        <br>
        <button type="submit" name="submit" style="position:relative; left: 46.5%;">Reģistrēties</button>
    </form>
</div>


<?php include 'footer.php'?>