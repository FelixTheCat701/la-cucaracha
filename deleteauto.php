<?php
global $db;
include "database+functie.php";

if (isset($_POST)){
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    SQLZonderResult($db, "DELETE FROM auto WHERE id=:idplaceholder", ["idplaceholder" => $id]);
}