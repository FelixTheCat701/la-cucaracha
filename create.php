<?php
include "databaseconnectie.php";
global $db;
echo "<link rel='stylesheet' type='text/css' href='css.css'/>";

if(isset($_POST["submit"]))
    SQLZonderResult($db, "INSERT INTO klant(naam, adres , postcode, woonplaats)
        VALUES(:x, :adres, :postcode, :woonplaats)",
        [
                "postcode" => filter_input(INPUT_POST, "postcode", FILTER_SANITIZE_STRING), $_POST["postcode"],
                "x" => filter_input(INPUT_POST, "naam", FILTER_SANITIZE_STRING), $_POST["naam"],
                "adres" => filter_input(INPUT_POST, "adres", FILTER_SANITIZE_STRING), $_POST["adres"],
                "woonplaats" => filter_input(INPUT_POST, "woonplaats", FILTER_SANITIZE_STRING), $_POST["woonplaats"]
        ]);
?>

<form method="post">
    <label>
        naam
        <input type="text" name="naam">
    </label>
    <br>
    <label>
        adres
        <input type="text" name="adres">
    </label>
    <br>
    <label>
        postcode
        <input type="text" name="postcode">
    </label>
    <br>
    <label>
        woonplaats
        <input type="text" name="woonplaats">
    </label>
    <br>
    verzenden
    <input type="submit" name="submit">
</form>
