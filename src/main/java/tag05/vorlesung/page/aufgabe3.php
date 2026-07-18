<?php
$dateiname = "beispiel.txt";

// ----------------------------
// Datei erstellen
// ----------------------------
if (!file_exists($dateiname)) {
    $datei = fopen($dateiname, "w");
    if ($datei !== false) {
        chmod($dateiname, 0644);
        fwrite($datei, "In $dateiname steht jetzt: Datei wurde neu erstellt." . PHP_EOL);
        //PHP_EOL ist eine vordefinierte PHP-Konstante und 
        //steht für den Zeilenumbruch des Betriebssystems (End Of Line).
        fclose($datei);
        echo "Datei <strong> $dateiname </strong> wurde erstellt.<br>";
    } else {
        die("Fehler: Datei konnte nicht erstellt werden.");
    }
} else {
    echo "Datei <strong> $dateiname </strong> existiert bereits.<br>";
}
echo "<hr>";

// ----------------------------
// Datei zeilenweise lesen
// ----------------------------
echo "<h3>Zeilenweise lesen</h3>";
$datei = fopen($dateiname, "r");
if ($datei !== false) {
    while (($zeile = fgets($datei)) !== false) {
        echo htmlspecialchars($zeile) . "<br>";
    }
    fclose($datei);
} else {
    echo "Datei konnte nicht geöffnet werden.<br>";
}
echo "<hr>";

// ----------------------------
// Gesamten Inhalt lesen
// ----------------------------
echo "<h3>Gesamter Inhalt</h3>";

$inhalt = file_get_contents($dateiname);
if ($inhalt !== false) {
    echo nl2br(htmlspecialchars($inhalt));
} else {
    echo "Datei konnte nicht gelesen werden.";
}
echo "<hr>";

// ----------------------------
// Datei löschen
// ----------------------------
if(file_exists($dateiname)){
    if(unlink($dateiname))
        echo "Datei $dateiname wurde gelöscht";
    else
        echo "Datei konnte nicht gelöscht werden";
}else{
    echo "Datei $dateiname konnte nicht gefunden werden.";
}
?>

<!--
Quellenangaben für fopen:
https://www.php.net/manual/function.fopen.php
-->