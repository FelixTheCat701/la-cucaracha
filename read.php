<?php
echo "<link rel='stylesheet' type='text/css' href='css.css'/>";
include "databaseconnectie.php";
global  $db;
$alleklanten = SQLMetResult($db, "SELECT * FROM klant", []);

printKlanten($alleklanten);

