
<?php 
session_start();

include "template\access.php";
access('USER');

include "header.php";

?>
<div class="cons" style="text-align:center;">
<h1>Profila rediģēšana</h1>
<?php if(!empty($row)): ?>
        
        <div>
                       
            <table class="center" style="width:50%;">
                <form method="post" action="#">
                        <td>
                            <input type="hidden" value="<?=$row['users_id']?>" type="text" name="id" placeholder="id" readonly>
                        <td></tr>
                        <tr><th>Vārds</th>
                            <td>
                                <input class="slud_namechange" value="<?=" ", $row['users_firstname']?>" type="text" name="firstname" placeholder="Vārds">
                            <td></tr>
                        <tr><th>Uzvārds</th>
                            <td>
                                <input class="slud_namechange" value="<?=" ", $row['users_lastname']?>" type="text" name="lastname" placeholder="Uzvārds">    
                            <td></tr>
                        <tr><th>E-pasts</th>
                            <td>
                                <input class="slud_namechange" value="<?=" ", $row['users_uid']?>" type="text" name="uid" placeholder="E-pasts">    
                            <td></tr>

                        <!-- <tr><th>Parole</th>
                        <td>
                            <input class="slud_namechange" type="text" name="pwd" placeholder=" Parole">    
                        <td></tr>

                        <tr><th>Atkārtot paroli</th>
                        <td>
                            <input class="slud_namechange" type="text" name="pwdrepeat" placeholder=" Atkārtot paroli">    
                        <td></tr> -->
                        <br>
                        <tr><th></th>
                        <td>
                        <div style="text-align:right;">
                            <button type="sumbit" name="submit">Saglabāt</button>
                            <a href="profile.php">
                                <button type="button" class="btn btn-danger">Atcelt</button>
                            </a>
                        </div>
                        <td></tr>
                </form>
            </table>
            
        </div>
</div>
<?php else: ?>
    <p>Profils netika atrasts!</p>
<?php endif; ?>
<?php 
include "footer.php";
?>

<script>

var myaction =
{
    collect_data: function(e, data_type)
    {
        e.preventDefault();
        e.stopPropagation();

        var inputs = document.querySelectorAll("form input, form select");
        let myform = new FormData();
        myform.append('data_type',data_type);

        for (var i = 0; i < inputs.length; i++) {
            myform.append(inputs[i].name, inputs[i].value);
        }
    }

}


</script>

<?php

$db = mysqli_connect('localhost', 'root', '') or
       die ('Unable to connect. Check your connection parameters.');
       mysqli_select_db($db, 'slampe' ) or die(mysqli_error($db));

    if(isset($_POST['submit'])){
        $id = $_POST["id"];
        $uid = $_POST["uid"];

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        // $email = $_POST["email"];
        $query = "UPDATE users SET users_firstname = '$firstname', users_lastname = '$lastname', users_uid = '$uid' WHERE users_id = '$id'";
        session_start();
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
                ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "profile.php";
        </script>
        <?php
             }               
?>
