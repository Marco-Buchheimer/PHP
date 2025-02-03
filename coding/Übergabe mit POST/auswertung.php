<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auswertung</title>

    <?php
    $Vorname = $_POST["Vorname"];
    $Nachname = $_POST["Nachname"];
    $Wohnort = $_POST["Wohnort"];

    $Wohnen = $_POST["Wohnen"];

    $Nachricht = $_POST["txtArea"];
    if (empty($Nachricht)) {
        $Nachricht = "<i>keine</i>";
    }
    ?>
</head>
<body>
    <main>
        <h1>Auswertung des Formulars</h1>

        <p>Vielen Dank für die Teilname an unserer Umfrage. Sie haben folgende Daten übermittelt:</p>

        <?php
            echo "Vorname: $Vorname <br>";
            echo "Nachname: $Nachname <br>";
            echo "Ort: $Wohnort <br>";

            echo "Wohnung: $Wohnen <br>";

            echo "Beliebte TV-Sendungen: ";
        foreach ($_POST["TV"] as $value) {
                echo "$value, ";
            }
        echo "<br>";


        echo "Nachricht: $Nachricht <br>";



        ?>
    </main>
</body>
</html>