<?php
session_start();
if ($_SESSION['loggedin']){
    ?>
<!--        link voor stylesheet-->
    <link href="stijlscheet.css" type="text/css" rel="stylesheet">
    <header
    <!--    navigatie bar-->
    <div class="navtop">
        <nav>
            <ul>
                <li><a class="active" href="websitehome.php">Home</a></li>
                <li><a class="#" href="Over-ons.php">Over ons</a></li>
                <li><a class="#" href="#">Review</a></li>
                <li><a class="#" href="#">Sociale Media</a></li>
                <li><a class="#" href="logout.php">Log uit</a></li>
                <li><a class="#" href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
    </header>
<!--CRUD knoppen-->
<div class="knopcontainer">
    <a href="" class="knop">Klant toevoegen</a>
    <br>
    <a href="#" class="knop">Klant updaten</a>
    <br>
    <a href="#" class="knop">Klant zoeken</a>
    <br>
    <a href="#" class="knop">Alle klanten</a>
    <br>
    <a href="#" class="knop">Auto toevoegen</a>
    <br>
    <a href="#" class="knop">Auto updaten</a>
    <br>
    <a href="#" class="knop">Auto zoeken</a>
    <br>
    <a href="#" class="knop">Alle auto's</a>
</div>
}
<?php
}
else {
    echo "<p class='LNS'>je moet inloggen om op deze pagina te komen</p>";
}


