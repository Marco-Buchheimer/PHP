<?php
$anreise = $_POST["anreise"];
$ueAnzahl = $_POST["naechte"];

$vorname = $_POST["vorname"];
$zuname = $_POST["zuname"];
$straße = $_POST["straße"];
$hnummer = $_POST["Hnummer"];
$plz = $_POST["plz"];
$ort = $_POST["ort"];
$mail = $_POST["mail"];
$telefon = $_POST["telefon"];

$Anz_Erw = $_POST["Anz_Erw"];
$Anz_Kin = $_POST["Anz_Kin"];
$Haustiere = $_POST["Haustiere"];
$status_Haustiere = "false";

$zimmer1 = $_POST["zimmer1"];
$zimmerart = "";

$zimmerpreis = "0.00";
$preis_Einzelzimmer = "85";
$preis_DoppelzimmerK1 = "136";
$preis_DoppelzimmerK2 = "170";
$preis_Mehrbettzimmer ="70";
$rabatt_MehrbettzimmerErw = "30";
$rabatt_MehrbettzimmerKin = "50";
$preis_Mehrbettzimmer_Erw = "70";
$preis_Mehrbettzimmer_Kin = "40";

$user_eingabe = $_POST["user_eingabe"];

if($Haustiere == "Ja"){
    $status_Haustiere = "Haustiere: <br> Preis: 00.00€ <br> <br>";
}
elseif($Haustiere == "Nein"){
    $status_Haustiere = "<br> <br>";
}
elseif($Haustiere == "keine Haustiere"){
    $status_Haustiere = "<br> <br>";
}


switch($zimmer1) {
    case "Einzelzimmer":
        $zimmerart = "Einzelzimmer";
        $zimmerpreis = $preis_Einzelzimmer;
        break;
    case "Doppelzimmer (Kategorie 1)":
        $zimmerart = "Doppelzimmer (Kategorie 1)";
        $zimmerpreis = $preis_DoppelzimmerK1;
        break;
    case "Doppelzimmer (Kategorie 2)":
        $zimmerart = "Doppelzimmer (Kategorie 2)";
        $zimmerpreis = $preis_DoppelzimmerK2;
        break;
    case "Mehrbettzimmer":
        $zimmerart = "Mehrbettzimmer";
        $zimmerpreis = $preis_Mehrbettzimmer;
        break;
    default:
        $zimmerart = "Einzelzimmer";
        $zimmerpreis = $preis_Einzelzimmer;
}

    if($preis_Mehrbettzimmer && $Anz_Erw >= 3) {
        $zimmerpreis = $Anz_Erw * $preis_Mehrbettzimmer_Erw * (1 - $rabatt_MehrbettzimmerErw / 100);
    }
    elseif($preis_Mehrbettzimmer && $Anz_Erw <= 3) {
        $zimmerpreis = $Anz_Erw * $preis_Mehrbettzimmer_Erw;
    }


    if($zimmerart == "Mehrbettzimmer" && $Anz_Kin >= 2) {
        $zimmerpreis = $Anz_Kin * $preis_Mehrbettzimmer_Kin * (1 - $rabatt_MehrbettzimmerKin / 100);
    }
    elseif($zimmerart == "Mehrbettzimmer" && $Anz_Kin <= 1) {
        $zimmerpreis = $Anz_Kin * $preis_Mehrbettzimmer_Kin;
    }




?>


<!DOCTYPE html>

<html lang="de">
<head>
    <meta charset="utf-8">

    <title>Hotel Vallora - Online Buchung</title>

    <link rel="stylesheet" type="text/css" href="../stylesheets/meinestyles.css">

</head>

<body>
<h1>Kostenzusammenstellung des Hotels Vallora</h1>

<?php
echo "<h2>Anzahl der Übernachtungen</h2>";
echo "Anreisedatum: $anreise";
echo "<br>";
echo "Anzahl der Übernachtungen: $ueAnzahl ";


echo "<br> <br>";


echo "<h2>Persönliche Daten und Rechnungsadresse</h2>";
echo "Vorname: $vorname";
echo "<br>";
echo "Nachname: $zuname";
echo "<br>";
echo "Straße: $straße";
echo "<br>";
echo "Hausnummer: $hnummer";
echo "<br>";
echo "PLZ: $plz";
echo "<br>";
echo "Ort: $ort";
echo "<br>";
echo "E-Mail: $mail";
echo "<br>";
echo "Telefon (für Rückfragen): $telefon";


echo "<br> <br>";

echo "<h2>Anzahl der Gäste</h2>";
echo "Erwachsene: $Anz_Erw <br> Preis: 00.00€";
echo "<br> <br>";
echo "Kinder: $Anz_Kin <br> Preis: 00.00€";
echo "<br> <br>";
echo "$status_Haustiere";


echo "<h2>Zimmerauswahl</h2>";
echo "$zimmerart <br> Preis: $zimmerart $zimmerpreis €";

echo "<br> <br>";

echo "<h2>Ihre persönliche Nachricht</h2>";
echo "$user_eingabe";
?>
</body>

</html>


