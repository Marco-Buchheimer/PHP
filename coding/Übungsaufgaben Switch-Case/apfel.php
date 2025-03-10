<?php
$apfelsorte = $_POST['apfelsorte'];
$mengeInKG=$_POST['kg'];

$Apfelsorte = "default";
$pJonagold = 1.50;
$pDelicious = 1.60;
$pGala = 1.65;
$pElstar = 2.00;


switch ($apfelsorte) {
    case $apfelsorte == "Jonagold":
        $Apfelsorte = "Jonagold";
        break;
    case $apfelsorte == "Delicious":
        $Apfelsorte = "Delicious";
        break;
    case $apfelsorte == "Gala":
        $Apfelsorte = "Gala";
        break;
    case $apfelsorte == "Elstar":
        $Apfelsorte = "Elstar";
        break;
    default:
        echo "Nix gut";
}

echo $Apfelsorte;



echo "<br>";
echo $mengeInKG;
?>