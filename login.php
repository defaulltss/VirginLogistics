<?php
session_start();
include "template\access.php";
include "header.php";

?>

<div class="container">
    <h2>Pieslēgties portālā!</h2>
    <?php
                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($fullUrl, "error=usernotfound") == true) {
                        echo "<p class='error'>Lietotājs netika atrasts!<p>";
                    }
                    elseif (strpos($fullUrl, "error=wrongpassword") == true) {
                        echo "<p class='error'>Nepareiza parole!<p>";
                    }
    ?>
    <form action="inc/login.inc.php" method="post" required>
            
    <div class="container">
    <form action="inc/login.inc.php" method="post" required>
        <input class="info" type="text" name="uid" placeholder="E-pasts" required>
        <input class="info" type="password" name="pwd" placeholder="Parole" required>
        <br>
        <button style="width:25%;"  class="submit">Pieslēgties</button>
    </form>
    <br>
        <p>Nav konts?  <a href="register.php">Reģistrējies</a></p>
    </div>
</div>


<?php
include "footer.php";
?>