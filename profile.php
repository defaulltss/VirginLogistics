<?php 
session_start();

include "template\access.php";

access('USER');


include "header.php";
?>
<div class="cons" style="text-align:center;">
<h1>Profils</h1>
<br>
<?php if(!empty($row)): ?>


        <div>
            <table class="center" style="width:50%;">
                <tr>
                    <th>Vārds</th>
                    <td><?=$row['users_firstname']?><td>
                </tr>
                <tr><th>Uzvārds</th>  <td><?=$row['users_lastname']?><td></tr>
                <tr><th>E-pasts</th>  <td><?=$row['users_uid']?><td></tr>
                <tr><th></th>
                <td>
                <div style="text-align:right;">
                    <?php if($_SESSION['userid'] == $row['users_id']):?>
                    <a href="profile-edit.php">
                    <button type="button" class="btn btn-primary">Rediģēt</button></a>
                    <a href="profile-delete.php">
                    <!-- <button type="button" class="btn btn-danger">Izdzēst profilu</button></a> -->
                    <td></tr>
                </div>
            <?php endif; ?>
            </table>
            
        </div>
</div>
<?php else: ?>
    <p>Profils netika atrasts!</p>
<?php endif; ?>
<?php 

include "footer.php";
?>