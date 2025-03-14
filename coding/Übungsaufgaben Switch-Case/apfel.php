<?php
$apfelsorte = $_POST['apfelsorte'];
$mengeInKG=$_POST['kg'];

$Apfelsorte = "default";
$pJonagold = 1.50 * $mengeInKG;
$pDelicious = 1.60 * $mengeInKG;
$pGala = 1.65 * $mengeInKG;
$pElstar = 2.00 * $mengeInKG;


switch ($apfelsorte) {
    case $apfelsorte == "Jonagold":
        $Apfelsorte = "Der Preis für $apfelsorte beträgt $pJonagold €";
        break;
    case $apfelsorte == "Delicious":
        $Apfelsorte = "Der Preis für $apfelsorte beträgt $pDelicious €";
        break;
    case $apfelsorte == "Gala":
        $Apfelsorte = "Der Preis für $apfelsorte beträgt $pGala €";
        break;
    case $apfelsorte == "Elstar":
        $Apfelsorte = "Der Preis für $apfelsorte beträgt $pElstar €";
        break;
    default:
        $Apfelsorte = "Fehler";
        }

echo $Apfelsorte;

?>