<?php
session_start();
include "template\access.php";
include "header.php";
?>

<div class="index-login-signup">
    <h2 class="pieslegties">Reģistrēties</h2>
    <br>
    <hr>
    <br>
    <h3 class="pieslegties">Ievadiet visus vajadzigos datus</h3>
    <br>
    <br>
    <form class="register__page" action="inc\signup.inc.php" method="POST">
        <h4>Vārds</h4>
        <input type="text" class="info_2" name="firstname" placeholder="Vārds" required>
        <h4>Uzvārds</h4>
        <input type="text" class="info_2" name="lastname" placeholder="Uzvārds" required>
        <br>
        <br>
        <h4>E-pasts</h4>
        <input type="text" class="info_2" name="uid" placeholder="E-pasts" required>
        <br>
        <br>
        <h4>Parole</h4>
        <input type="password" class="info_2" name="pwd" placeholder="Jūsu parole" required>
        <input type="password" class="info_2" name="pwdrepeat" placeholder="Atkārtojiet paroli" required>
        <br>
        <br>
        <button type="submit" name="submit">Reģistrēties</button>
    </form>
</div>
<br>
<br>
<br>
<br>


<?php include 'footer.php'?>