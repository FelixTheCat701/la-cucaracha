<?php
include "database+functie.php";
global $db;
echo "<link rel='stylesheet' type='text/css' href='cssauto.css'/>";

if(isset($_POST["submit"]))
    SQLZonderResult($db, "INSERT INTO auto(eigenaar, type , kenteken , kleur, merk, kilometerstand)
        VALUES(:x, :eigenaar, :kenteken, :kleur, :merk, :kilometerstand)",
        [
            "eigenaar" => filter_input(INPUT_POST, "eigenaar", FILTER_SANITIZE_STRING),
            "x" => filter_input(INPUT_POST, "type", FILTER_SANITIZE_STRING),
            "kenteken" => filter_input(INPUT_POST, "kenteken", FILTER_SANITIZE_STRING),
            "kleur" => filter_input(INPUT_POST, "kleur", FILTER_SANITIZE_STRING),
            "merk" => filter_input(INPUT_POST, "merk", FILTER_SANITIZE_STRING),
            "kilometerstand" => filter_input(INPUT_POST, "kilometerstand", FILTER_SANITIZE_STRING),
        ]);
?>

<form method="post">
    <label>
        Eigenaar
        <input type="text" name="eigenaar">
    </label>
    <br>
    <label>
        Merk
        <input type="text" name="merk">
    </label>
    <br>
    <label>
        Type
        <input type="text" name="type">
    </label>
    <br>
    <label>
        Kenteken
        <input type="text" name="kenteken">
    </label>
    <br>
    <label>
        Kilometerstand
        <input type="text" name="kilometerstand">
    </label>
    <br>
    <label>
       Kleur
        <input type="text" name="kleur">
    </label>
    <br>
    Verzenden
    <input type="submit" name="submit">
</form>
