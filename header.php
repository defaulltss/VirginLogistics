<?php include "classes/dbh.classes.php"; ?>
<style>
<?php include "static/visual.css"; ?>
</style>

<!DOCTYPE html>
<html class="lapa" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>VirginLogistics</title>
    <link rel="stylesheet" type="text/css" href="{{url_for('static', filename='visual.css')}}">
    <link rel="stylesheet" href="\static\visual.css">


</head>
<body>
<?php
// for profile
require('template\functions.php');
if(isset($_SESSION['userid']))
{
$id = $_SESSION['userid'];
$row = db_query("select * from users where users_id = :users_id limit 1",['users_id'=>$id]);
if($row)
{
    $row = $row[0];
}
}
?>
<header>
    <img class="logo" src='static/img/logo.png'> 
    <nav class="navbar">
        <ul class="nav__links">
            <li><a class="sakums" href="index.php">Sākums</a></li>
            <!-- <li><a class="sludinajumi" href="ads-home.php">Sludinājumu backend</a></li> -->
            <li><a class="sludinajumi" href="listings.php">Sludinājumi</a></li>
            <li><a class="parmums" href="about.php">Par mums</a></li>
            <?php if(access('ADMIN', false)): ?>
            <li>
                <a class="parmums" href="admin.php">Admin</a>
            </li>
        <?php endif; ?>
        </ul>
    </nav>
    <?php
        if(isset($_SESSION["useruid"]))
        {
    ?>
        <nav class="profile">
            <ul class="prof__links">
                <li>
                    <div class="profile__dropdown">
                    <img class="profile__img" class="profilabildes" src='static/img/cilveki.jpg'>
                        <div class="profile__options">
                            <a href="profile.php">Profils</a>
                            <a href="ads-mine.php">Mani sludinājumi</a>
                            <a href="ads-create.php">Ievietot sludinājumu</a>
                            <a href="inc/logout.inc.php">Iziet no sistēmas</a>
                        </div>
                    </div>
                </li>
                <li><?php echo $row['users_firstname'] ?></li>
            </ul>
        </nav>
    <?php
        }
        else
        {
    ?>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Pieslēgties</button>
    <?php
        }
    ?>
</header>

<div id="id01" class="modal">

  <form class="modal-content animate" action="inc/login.inc.php" method="post" required>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src='static/img/logo.png' class="avatar">
    </div>

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

  </form>

</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<?php if(access('ADMIN', false)): ?>
    
<?php endif; ?>