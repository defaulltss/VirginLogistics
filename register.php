<?php
session_start();
include "template\access.php";
include "header.php";
?>

<div class="index-login-signup">
    <h4>Reģistrēties</h4>
    <p>teksts teksts teksts teksts</p>
    <form action="inc\signup.inc.php" method="POST">
        <input type="text" name="firstname" placeholder="Vārds" required>
        <input type="text" name="lastname" placeholder="Uzvārds" required>
        <input type="text" name="uid" placeholder="E-pasts" required>
        <input type="password" name="pwd" placeholder="Jūsu parole" required>
        <input type="password" name="pwdrepeat" placeholder="Atkārtojiet paroli" required>
        <br>
        <button type="submit" name="submit">Reģistrēties</button>
    </form>
</div>


<?php include 'footer.php'?>