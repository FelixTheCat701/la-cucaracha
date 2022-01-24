<form method="post">
    <label>
        ID:
        <input type="number" name="id">
    </label>
    <input type="submit" name="submit">
</form>
<?php
include "databaseconnectie.php";
global $db;

if (isset($_POST["submit"])) {
        $results = SQLMetResult($db, "SELECT * FROM klant WHERE id=:idplaceholder",
            ["idplaceholder" => filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT)]);

        if (count($results) == 0) {
            echo "Geen resultaat";
        }
        else {
            printKlanten($results);
        }
}
