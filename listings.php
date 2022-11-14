<?php
session_start();
include "template\access.php";
include "header.php";
?>

<div class="Filters">
        <h2>Cena</h2>
        <br> 
    <div class="form_no_lidz">
        <input type="text" id="cena_no" class="cena"> līdz <input type="text" id="cena_lidz" class="cena">
    </div>
        <br><br>
        <h2>Atrašanās vieta</h2>
        <br>
        <input type="text" placeholder="Meklēšana" class="meklet">
        <br><br>
    <div>
        <input type="checkbox"> Rīga
        <input type="checkbox"> Liepāja
        <input type="checkbox"> Tukums
        <input type="checkbox"> Jelgava
        <a href="">Rādīt vairāk</a>
    </div>
        <br><br>
        <h2>Platība</h2>
        <br>
    <div class="form_no_lidz">
        <input type="text" id="platiba_no" class="platiba"> līdz <input type="text" id="platiba_lidz" class="platiba">
    </div>
    <br><br>
    <div>
        <button><a>Filtrēt</a></button>
    </div>
</div>
<div class="Listings">
    <h2>Sludinājumi</h2>
    <div class="sludinajums">
        <a href="" class="click_slud">
            <div class="slud"> 
                <img class="slud_bilde" src='static/img/dzivokli/Ventspils.jpg' alt="img">
                <a class="sludteksts">Pilsēta : Rīga</a><br>
                <a class="sludteksts">Iela : Jāņa Asara iela 15</a><br>
                <a class="sludteksts">Cena : 250 eur/mēn</a>
            </div>
        </a>
        <a href="" class="click_slud">
            <div class="slud">
                <img class="slud_bilde" src='static/img/dzivokli/Ogre.jpg' alt="img">
                <a class="sludteksts">Pilsēta : Rīga</a><br>
                <a class="sludteksts">Iela : Jāņa Asara iela 15</a><br>
                <a class="sludteksts">Cena : 250 eur/mēn</a>
            </div>
        </a>
        <a href="" class="click_slud">
            <div class="slud">
                <img class="slud_bilde" src='static/img/dzivokli/Riga.jpg' alt="img">
                <a class="sludteksts">Pilsēta : Rīga</a><br>
                <a class="sludteksts">Iela : Jāņa Asara iela 15</a><br>
                <a class="sludteksts">Cena : 250 eur/mēn</a>
            </div>
        </a>
    </div>
</div>

<?php include 'footer.php'?>