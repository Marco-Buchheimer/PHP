<?php
$bezeichnung_tisch = "Schreibtisch";
$bezeichnung_stuhl = "Bürostuhl";
$bezeichnung_lampe = "Lampe";
$bezeichnung_pctisch = "Computertisch";

$preis_tisch = 1999.00;
$preis_stuhl = 589.00;
$preis_lampe = 29.00;
$preis_pctisch = 999.00;

$MWST = 1.19; // = 19%

$netto_gesamt = $preis_tisch + $preis_stuhl + $preis_lampe + $preis_pctisch;
$brutto_gesamt = $netto_gesamt * $MWST ;


echo "<h1>Mit Variablen, Operatoren und Konstanten arbeiten</h1>";

echo "Netto-Gesamtpreis der eingekauften Artikel: " .$netto_gesamt." Euro. <br> <br>";
echo "Brutto-Gesamtpreis der eingekauften Artikel: " .$brutto_gesamt." Euro. <br> <br> <br>";

echo "Brutto-Preis <b>$bezeichnung_tisch</b>: ".$preis_tisch * $MWST." Euro. <br>";
echo "Brutto-Preis <b>$bezeichnung_stuhl</b>: ".$preis_stuhl * $MWST." Euro. <br>";
echo "Brutto-Preis <b>$bezeichnung_lampe</b>: ".$preis_lampe * $MWST." Euro. <br>";
echo "Brutto-Preis <b>$bezeichnung_pctisch</b>: ".$preis_pctisch * $MWST." Euro. <br>";


?>