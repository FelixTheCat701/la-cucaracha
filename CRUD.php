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
    <a href="create.php" class="knop">Klant toevoegen</a>
    <br>
    <a href="read.php" class="knop">Klant updaten</a>
    <br>
    <a href="search.php" class="knop">Klant zoeken</a>
    <br>
    <a href="read.php" class="knop">Alle klanten</a>
    <br>
    <a href="createauto.php" class="knop">Auto toevoegen</a>
    <br>
    <a href="readauto.php" class="knop">Auto updaten</a>
    <br>
    <a href="searchauto.php" class="knop">Auto zoeken</a>
    <br>
    <a href="readauto.php" class="knop">Alle auto's</a>
</div>
}
<?php
}
else {
    echo "<p class='LNS'>je moet inloggen om op deze pagina te komen</p>";
}


