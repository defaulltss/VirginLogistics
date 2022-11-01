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
            <li><a class="sludinajumi" href="listings.php">Sludinājumi</a></li>
            <li><a class="parmums" href="about.php">Par mums</a></li>
        <?php if(access('ADMIN', false)): ?>
            <li>
                <a class="admin" href="admin.php">Admin</a>
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
                            <a href="#">Mani sludinājumi (Soon)</a>
                            <a href="#">Ievietot sludinājumu (Soon)</a>
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
        <li><a onclick="Loginfunction()"><button class="login">Pieslēgties</button></a></li>
    <?php
        }
    ?>
</header>
<script>
function Loginfunction() {
  var x = document.getElementById("LoginBody");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }

}
</script>
<div id="LoginBody" class="fade">
  <div style="">
    <h2 style="text-align: center;">Pieslēgties</h2>
    <br>
    <br>
    <form action="inc/login.inc.php" method="post" required>
        <input style="position:relative; left:-15px;  "class="info" type="text" name="uid" placeholder="E-pasts" required>
        <input style="position:relative; left:195px;top:-20px;  "class="info" type="password" name="pwd" placeholder="Parole" required>
        <br>
        <br>
        <button style=" position:relative; left:300px;" type="sumbit" name="submit">Pieslēgties</button>
    </form>
    <h3 style="text-align: center; margin-top:10px;">nav vel konts uztaisīts? tad</h3>
    <hr>
        <br>
        <a href="register.php"><button style="position:relative; left:25px;">Reģistrēties</button></a>
        <a href="#"><button style="position:relative; right:-128px;">google(nestrada vel)</button></a>
  </div>
</div>

<?php if(access('ADMIN', false)): ?>
    
<?php endif; ?>