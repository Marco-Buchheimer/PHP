<?php
for ($i=0; $i<10; $i++){
    echo "Durchlauf: $i <br>";
}

$i = 0;
while($i < 5){
    echo "Schritt: $i <br>";
    $i++;
}

$i = 1;
do {
    echo "$i <br>";
    $i++;
}
while($i < 5);


echo "<br> <br> Aufgaben <br> <br>";

$i = 0;
while($i < 6){
    echo "$i <br>";
    $i++;
}

echo "<br>";

$i = 0;
while($i < 11){
    echo "$i ";
    $i++;
}

echo "<br>";

$i = 5;
while($i > 0){
    echo "$i <br>";
    $i--;
}

echo "<br>";

$i = "0";
$ausgabe = "PHP";

while($i < 3){
    echo "$ausgabe <br>";
    $i++;
}

$summe = 0;
$i = 0;

while($i < 6){
    $summe += $i;
    $i++;
}
echo "Die Summe von 1-5 ist: $summe<br>";
?>