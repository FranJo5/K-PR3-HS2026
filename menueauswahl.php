<?php
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
$mail = "Nachname: " . $nachname . "\n";
$mail = $mail . "Vorname: " . $vorname . "\n";
$mail = $mail . "Menüauswahl: " . $menue . "\n";
$mail = $mail . "Ernährungsbesonderheiten: " . $besonderheiten . "\n";
$mail = $mail . "Sonstiges: " . $sonstiges . "\n";
$mail = $mail . "Weitere Wünsche: " . $wuensche . "\n";

//Test
echo $mail
?>