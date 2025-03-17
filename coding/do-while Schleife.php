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

?>