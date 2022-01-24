<?php
include "databaseconnectie.php";
global $db;
echo "<link rel='stylesheet' type='text/css' href='css.css'/>";

if(isset($_POST["submit"]))
    SQLZonderResult($db, "INSERT INTO klant(naam, adres , postcode, woonplaats)
        VALUES(:x, :adres, :postcode, :woonplaats)",
        [
                "postcode" => filter_input(INPUT_POST, "postcode", FILTER_SANITIZE_STRING),
                "x" => filter_input(INPUT_POST, "naam", FILTER_SANITIZE_STRING),
                "adres" => filter_input(INPUT_POST, "adres", FILTER_SANITIZE_STRING),
                "woonplaats" => filter_input(INPUT_POST, "woonplaats", FILTER_SANITIZE_STRING),
        ]);
?>

<form method="post">
    <label>
        Naam
        <input type="text" name="naam">
    </label>
    <br>
    <label>
        Adres
        <input type="text" name="adres">
    </label>
    <br>
    <label>
        Postcode
        <input type="text" name="postcode">
    </label>
    <br>
    <label>
        Woonplaats
        <input type="text" name="woonplaats">
    </label>
    <br>
    Verzenden
    <input type="submit" name="submit">
</form>
