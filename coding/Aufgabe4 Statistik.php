<?php
$name = "Marco Buchheimer";
$age = 16;
$water = 1.5;
$sport = false;
$sport_wert = "Nein";


$new_age = $age + 1;
$new_water = $water -0.5;


if ($sport != true) {
    $sport = true;
    $sport_wert = "Ja";
}

echo "Mein Name ist $name. Ich bin $age Jahre alt. Ich trinke durchschnittlich $water Liter am Tag. Habe ich heute Sport gemacht? $sport_wert.";


?>