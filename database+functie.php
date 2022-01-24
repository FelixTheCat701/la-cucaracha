<?php
$db = new PDO("mysql:host=localhost;dbname=garage_ertan", "root", "root");

function SQLMetResult($db,$commando, $values){
    $query = $db->prepare($commando);
    $query->execute($values);
    $result = $query->fetchALL(PDO::FETCH_ASSOC);
    return $result;

}


function SQLZonderResult($db,$commando, $values)
{
    $query = $db->prepare($commando);
    $query->execute($values);
}

function printAutos($autos){
    echo "<table>";
    foreach ($autos as $auto) {
        echo "<tr>";
        ?>
        <td>
            <form class="flexboxcenter" action="deleteauto.php" method="post">
                <input value="<?php echo $auto["id"]; ?>" name="id" hidden>
                <input type="submit" name="submit" value="Delete">
            </form>
        </td>
        <td>
            <form class="flexboxcenter" action="update1auto.php" method="post">
                <input value="<?php echo $auto["id"]; ?>" name="id" hidden>
                <input type="submit" name="submit" value="Update">
            </form>
        </td>



        <?php
        colomnprint($auto, "id");
        colomnprint($auto, "eigenaar");
        colomnprint($auto, "merk");
        colomnprint($auto, "type");
        colomnprint($auto, "kenteken");
        colomnprint($auto, "kilometerstand");
        colomnprint($auto, "kleur");
        echo "</tr>";

    }
    echo "</table>";
}

function colomnprint($row, $fieldname){
    echo "<td>" . $row[$fieldname] . "</td>";
}
echo "<link rel='stylesheet' type='text/css' href='cssauto.css'/>";
