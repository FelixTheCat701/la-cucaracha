<?php


include "database+functie.php";
global $db;

if (isset($_POST["submit"])){
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $autos = SQLMetResult($db, "SELECT * FROM auto WHERE id=:id",
        [
            "id" =>$id
        ]);
    if (count($autos) == 0){
        echo "klant niet gevonden";
    }
    else{
        $auto = $autos[0];
        echo "ID: " . $auto["id"];
        ?>
        <form method="post" action="update2auto.php">

            <input type="text" name="id" value="<?php echo  $auto["id"]?>" hidden>
            <label>
                Eigenaar:
                <input type="text" name="eigenaar" value="<?php echo  $auto["eigenaar"]?>">
            </label>
            <br>
            <label>
                Type:
                <input type="text" name="type" value="<?php echo  $auto["type"]?>">
            </label>
            <br>
            <label>
                Kenteken:
                <input type="text" name="kenteken" value="<?php echo  $auto["kenteken"]?>">
            </label>
            <br>
            <label>
                Kleur:
                <input type="text" name="kleur" value="<?php echo  $auto["kleur"]?>">
            </label>
            <br>
            <input type="submit" name="submit">
        </form>

        <?php
    }

}

