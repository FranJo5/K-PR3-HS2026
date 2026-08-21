<?php
// Franziska Hampe | Matrikel-Nr. 1152767 | KÜ Programmierung 3 | Abgabe: 29.08.2026
//Auslesen
//Name
$nachname = $_POST["nachname"];
$vorname = $_POST["vorname"];

//Menüauswahl
$menue = $_POST["auswahl"];

//Ernährungsbesonderheiten

$besonderheiten = "";

if (isset($_POST["vegan"])) {
    $besonderheiten = $besonderheiten . "vegan";
}

if (isset($_POST["vegetarisch"])) {
   if($besonderheiten!="")
    {
        $besonderheiten = $besonderheiten . ", ";
    }
    $besonderheiten = $besonderheiten . "vegetarisch";
}

if (isset($_POST["laktosefrei"])) {
   if($besonderheiten!="")
    {
        $besonderheiten = $besonderheiten . ", ";
    }
    $besonderheiten = $besonderheiten . "laktosefrei";
}

if (isset($_POST["glutenfrei"])) {
   if($besonderheiten!="")
    {
        $besonderheiten = $besonderheiten . ", ";
    }
    $besonderheiten = $besonderheiten . "glutenfrei";
}

if (isset($_POST["zuckerfrei"])) {
   if($besonderheiten!="")
    {
        $besonderheiten = $besonderheiten . ", ";
    }
    $besonderheiten = $besonderheiten . "zuckerfrei";
}

//Sonstiges
$sonstiges = $_POST["sonstiges"];

//Weitere Wünsche
$wuensche = $_POST["wuensche"];

//E-Mail Text zusammenbauen
$mailmessage = "Nachname: " . $nachname . "\n";
$mailmessage = $mailmessage . "Vorname: " . $vorname . "\n";
$mailmessage = $mailmessage . "Menüauswahl: " . $menue . "\n";
$mailmessage = $mailmessage . "Ernährungsbesonderheiten: " . $besonderheiten . "\n";
$mailmessage = $mailmessage . "Sonstiges: " . $sonstiges . "\n";
$mailmessage = $mailmessage . "Weitere Wünsche: " . $wuensche . "\n";

//Mail-Variablen
$empfaenger = "test@auftraggeberin.de";
$betreff = "Neue Menüanmeldung - Methodik des Geschmacks";

//Mail abschicken
if (mail($empfaenger, $betreff, $mailmessage)) {
    echo "Mail wurde verschickt.";
} else {
    echo "Mail konnte nicht verschickt werden.";
}

?>