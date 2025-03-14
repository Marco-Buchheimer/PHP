<?php
$gewicht = 39;

switch ($gewicht) {
    case $gewicht <= 20:
        echo "S bis 20 kg";
    break;
    case $gewicht <= 40:
        echo "M bis 40 kg";
        break;
    case $gewicht <= 60:
        echo "L (bis 60 kg)";
        break;
    case $gewicht >=60:
        echo "XL (über 60 kg)";
        break;
    }
?>