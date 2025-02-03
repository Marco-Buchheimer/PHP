<?php
$gewicht = isset($_POST["koerpergewicht"]) ? $_POST["koerpergewicht"] : "";
$groesse = isset($_POST["koerpergroeße"]) ? $_POST["koerpergroeße"] : "";
$BMI = 0;

echo $gewicht;
echo "<br>";
echo $groesse;

$BMI = $gewicht / $groesse * $BMI;
?>