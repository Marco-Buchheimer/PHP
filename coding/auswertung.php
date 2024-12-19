<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auswertung</title>
</head>
<body>
    <main>
        <h1>Auswertung des Formulars</h1>

        <p>Vielen Dank für die Teilname an unserer Umfrage. Sie haben folgende Daten übermittelt:</p>

        <?php
            echo $_POST["Vorname"];
        ?>
    </main>
</body>
</html>