<?php
include "databaseconnectie.php";
global $db;

if (isset($_POST)){
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    SQLZonderResult($db, "DELETE FROM klant WHERE id=:idplaceholder", ["idplaceholder" => $id]);
}