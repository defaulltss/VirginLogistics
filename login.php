<?php
session_start();
include "template\access.php";
include "header.php";

?>
 
<div class="index-login-login">
            <h4>Pieslēgtis</h4>
            <p>teksts teksts teksts teksts</p>
            <form action="inc/login.inc.php" method="post" required>
                <input type="text" name="uid" placeholder="E-pasts" required>
                <input type="password" name="pwd" placeholder="Parole" required>
                <br>
                <button type="sumbit" name="submit">Pieslēgties</button>
            </form>
                <br>
                <a href="register.php"><button>Reģistrēties</button></a>
        </div>
    </div>

</section>

<?php include 'footer.php'?>