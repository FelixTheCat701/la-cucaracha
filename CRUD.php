<?php
session_start();
if ($_SESSION['loggedin']){
    ?>
   echo <link href="stijlscheet.css" type="text/css" rel="stylesheet">
<header>
<div class="navtop">
    <nav>
        <ul>
            <li><a class="#" href="home.php">Home</a></li>
            <li><a class="#" href="Over-ons.php">Over ons</a></li>
            <li><a class="#" href="#">Jou auto</a></li>
            <li><a class="#" href="#">Auto toevoegen</a></li>
            <li><a class="#" href="#">Review</a></li>
            <li><a class="#" href="#">CRUD</a></li>
            <li><a class="#" href="#">Sociale Media</a></li>
            <li><a class="#" href="#">CV</a></li>
            <li><a class="#" href="Contact.php">Contact</a></li>
        </ul>
    </nav>
</div>
</header>

<div class="knopcontainer">
    <a href="#" class="knop">Klant toevoegen</a>
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
</div>
}
<?php
}


