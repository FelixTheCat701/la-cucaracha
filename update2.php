<?php
include "databaseconnectie.php";
global $db;

if (isset($_POST["submit"])){
    SQLZonderResult($db, "UPDATE klant SET naam = :naam, woonplaats = :woonplaats, postcode = :postcode, adres = :adres WHERE id = :id",
    [
        "naam" => filter_input(INPUT_POST, "naam", FILTER_SANITIZE_STRING),
        "adres" => filter_input(INPUT_POST, "adres", FILTER_SANITIZE_STRING),
        "postcode" => filter_input(INPUT_POST, "postcode", FILTER_SANITIZE_STRING),
        "woonplaats" => filter_input(INPUT_POST, "woonplaats", FILTER_SANITIZE_STRING),
        "id" => filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT)
    ]);
}
