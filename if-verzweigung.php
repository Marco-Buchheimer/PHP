<?php
$wert1 = "";
$wert2 = "";
$wert3 = "";

$wert1 = $_GET["wert1"];
$wert2 = $_GET["wert2"];
$wert3 = $_GET["wert3"];

echo $wert1;
echo $wert2;
echo $wert3;

if ($wert1 > $wert2) {
    echo "Wer";
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if-Verzweigung</title>

</head>
<body>



<form action="#" method="GET">
    <label for="wert1">Wert 1</label>
    <input type="text" name="wert1" id="W1">
    <br>
    <label for="wert2">Wert 2</label>
    <input type="text" name="wert2" id="W2">
    <br>
    <label for="wert3">Wert 3</label>
    <input type="text" name="wert3" id="W3">
    <br>
    <input type="submit" value="Absenden">

</form>
</body>
</html>

