<?php
session_start();
include "template\access.php";
include "header.php";
?>
<div class="container">
<section>

    <img class="log" src='static/img/unknown.png'>
    <div class="wrapper">
        <span><h1>Meklējiet vietu, kuru saukt par mājām?</h1><br>
            <span><h3>Mums ir tieši tas, ko meklējat!</h3><br>
                <a href="listings.php"><button>Apskatīt sludinājumus</button></a>
            </span>
        </span>
    </div>
</section>
<div class="popsludbox">
    <h1 class="popslud">Populārākie sludinājumi</h1>
</div>
<section>
    <input type="image" src='static/img/button-left.png' id="button-right">
    <div class="row">
        <div class="column">
            <img id ="image" src='static/img/dzivokli/Ventspils.jpg' alt="img">
                <br>
            <h2 class="cityname">Rīga</h2>
                <br>    
            <h3 class="cityname">Plašs 2 istabu dzīvoklis pašā Rīgas sirdī, ar terasi- Ausekļa ielā 23</h3>
                <br>
            <div class="container">  
                <a href="listings.php"><button id ="btn">Apskatīt</button></a>  
            </div> 
        </div>
        <div class="column">
            <img id ="image" src='static/img/dzivokli/Liepaja.jpg' alt="img">
                <br>
            <h2 class="cityname">Liepāja</h2>
                <br>
            <h3 class="cityname">Plašs 4 istabu dzīvoklis kas atrodas pie jūras - 88 Oskara Kalpaka Iela</h3>
                <br>
            <div class="container">  
                <a href="listings.php"><button id ="btn">Apskatīt</button></a>  
            </div> 
        </div>
        <div class="column">
            <img id ="image" src='static/img/dzivokli/Tukums.jpg' alt="img">
                <br>
            <h2 class="cityname">Tukums</h2>
                <br>
            <h3 class="cityname">Plašs 3 istabu dzīvoklis, atrodas tieši pilsētas klusajā dalā - J. Raiņa Iela 4-10</h3>
                <br>
            <div class="container">  
                <a href="listings.php"><button id ="btn">Apskatīt</button></a>
            </div> 
        </div>
    </div>
    <input type="image" src='static/img/button-right.png' id="button-left">
</section>
<br><br>
</div>

<?php include 'footer.php'?>
