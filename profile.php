<?php 
session_start();

include "template\access.php";

access('USER');


include "header.php";
?>

<h1>Profils</h1>
<?php if(!empty($row)): ?>
    <div>
        <div>
        
        </div>
        <div>
            <h2>Lietotāja profils,</h2>
            <table class="table table-striped">
                <tr><th>Lietotāja dati, id</th><td><?=$row['users_id']?><td></tr>
                <tr><th>Vārds</th><td><?=$row['users_firstname']?><td></tr>
                <tr><th>Uzvārds</th><td><?=$row['users_lastname']?><td></tr>
                <tr><th>E-pasts</th><td><?=$row['users_uid']?><td></tr>
            </table>
            <?php if($_SESSION['userid'] == $row['users_id']):?>
                <a href="profile-edit.php">
                <button type="button" class="btn btn-primary">Rediģēt</button></a>
                <a href="profile-delete.php">
                <button type="button" class="btn btn-danger">Izdzēst profilu</button></a>
            <?php endif; ?>
        </div>
    </div>
<?php else: ?>
    <p>Profils netika atrasts!</p>
<?php endif; ?>
<?php 
include "footer.php";
?>