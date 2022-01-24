<?php

include "database+functie.php";
global $db;

if (isset($_POST["submit"])) {
    SQLZonderResult($db, "UPDATE auto SET eigenaar = :eigenaar,  type = :type, kenteken = :kenteken, kleur = :kleur WHERE id = :id",
        [
            "eigenaar" => filter_input(INPUT_POST, "eigenaar", FILTER_SANITIZE_STRING),
            "type" => filter_input(INPUT_POST, "type", FILTER_SANITIZE_STRING),
            "kenteken" => filter_input(INPUT_POST, "kenteken", FILTER_SANITIZE_STRING),
            "kleur" => filter_input(INPUT_POST, "kleur", FILTER_SANITIZE_STRING),
            "id" => filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT)
        ]);
}
