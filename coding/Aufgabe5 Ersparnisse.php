<?php
$monatliches_einkommen = 1250;
$fixkosten = 500;
$variable_ausgaben = 200;
$sparziel = 500;

$gesammtausgaben = $fixkosten + $variable_ausgaben;
$verbleibendes_geld = $monatliches_einkommen - $gesammtausgaben;

$infaltion = 1.05;
$fixkosten_neu = $fixkosten * $infaltion;
$variable_ausgaben_neu = $variable_ausgaben - 50;
$sparziel_neu = 350;


echo "<b>Vor der Änderung: </b> <br>";
echo "Gesammtausgaben: $gesammtausgaben<br>";
echo "Fixkosten: $fixkosten Euro.<br>";
echo "Variableausgaben: $variable_ausgaben<br>";
echo "Sparziel: $sparziel Euro.<br> <br>";


echo "<b>Nach der Änderung:</b> <br>";
echo "Gesammtausgaben: $gesammtausgaben<br>";
echo "Fixkosten: $fixkosten_neu Euro.<br>";
echo "Variableausgaben: $variable_ausgaben_neu<br>";
echo "Sparziel: $sparziel_neu Euro.<br> <br>";
?>