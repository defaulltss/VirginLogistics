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
                <input type="text" name="uid" placeholder="E-pasts" required>
                <br>
                <input type="password" name="pwd" placeholder="Parole" required>
                <br>
                <button type="sumbit" name="submit">Pieslēgties</button>
            </form>
                <br>
                <a href="register.php"><button>Reģistrēties</button></a>
</div>


</section>

<?php include 'footer.php'?>