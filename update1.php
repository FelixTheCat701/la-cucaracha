<?php

include "databaseconnectie.php";
global $db;

if (isset($_POST["submit"])){
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $klanten = SQLMetResult($db, "SELECT * FROM klant WHERE id=:id",
    [
        "id" =>$id
    ]);
    if (count($klanten) == 0){
        echo "klant niet gevonden";
    }
    else{
        $klant = $klanten[0];
        echo "ID: " . $klant["id"];
        ?>
        <form method="post" action="update2.php">

                <input type="text" name="id" value="<?php echo  $klant["id"]?>" hidden>
            <label>
                Naam:
                <input type="text" name="naam" value="<?php echo  $klant["naam"]?>">
            </label>
            <br>
            <label>
                Adres:
                <input type="text" name="adres" value="<?php echo  $klant["adres"]?>">
            </label>
            <br>
            <label>
                Postcode:
                <input type="text" name="postcode" value="<?php echo  $klant["postcode"]?>">
            </label>
            <br>
            <label>
                Woonplaats:
                <input type="text" name="woonplaats" value="<?php echo  $klant["woonplaats"]?>">
            </label>
            <br>
            <input type="submit" name="submit">
        </form>

        <?php
    }

}



