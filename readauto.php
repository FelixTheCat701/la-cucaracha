<?php

echo "<link rel='stylesheet' type='text/css' href='cssauto.css'/>";
include "database+functie.php";
global $db;
$alleautos = SQLMetResult($db, "SELECT * FROM auto", []);

printAutos($alleautos);
