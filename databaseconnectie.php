<?php

function SQLMetResult($db,$commando, $values){
    $query = $db->prepare($commando);
    $query->execute($values);
    $result = $query->fetchALL(PDO::FETCH_ASSOC);
    return $result;

}


function SQLZonderResult($db,$commando, $values){
    $query = $db->prepare($commando);
    $query->execute($values);

}

$db = new PDO("mysql:host=localhost;dbname=garage_ertan", "root", "root");

function printKlanten($klanten){
    echo "<table>";
    foreach ($klanten as $klant) {
        echo "<tr>";
        ?>
        <td>
            <form   class="flexboxcenter" action="delete.php" method="post">
                <input value="<?php echo $klant["id"]; ?>" name="id" hidden>
                <input type="submit" name="submit" value="Delete">
            </form>
        </td>
        <td>
            <form  class="flexboxcenter" action="update1.php" method="post">
                <input value="<?php echo $klant["id"]; ?>" name="id" hidden>
                <input type="submit" name="submit" value="Update">
            </form>
        </td>



        <?php
        colomnprint($klant, "id");
        colomnprint($klant, "naam");
        colomnprint($klant, "adres");
        colomnprint($klant, "postcode");
        colomnprint($klant, "woonplaats");
        echo "</tr>";

    }
    echo "</table>";
    }

function colomnprint($row, $fieldname){
    echo "<td>" . $row[$fieldname] . "</td>";
}