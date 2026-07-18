<?php
// Prüfen, ob eine Datei gesendet wurde
if (!isset($_FILES['datei'])) {
    die("Keine Datei empfangen.");
}

$file = $_FILES['datei'];

// Fehler prüfen
if ($file['error'] !== UPLOAD_ERR_OK) {
    die("Upload-Fehler: " . $file['error']);
}

// Sicherheitsmaßnahmen
$erlaubte_endungen = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'txt'];
$dateiendung = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

if (!in_array($dateiendung, $erlaubte_endungen)) {
    die("Dateityp nicht erlaubt.");
}

// Max. Dateigröße (z. B. 5 MB)
$max_size = 5 * 1024 * 1024;
if ($file['size'] > $max_size) {
    die("Datei ist zu groß (max. 5 MB).");
}

// Upload-Ordner prüfen
$upload_dir = __DIR__ . '/uploads/';

if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// Sicheren Dateinamen erzeugen
$neuer_name = uniqid('upload_', true) . '.' . $dateiendung;

// Datei verschieben
$ziel = $upload_dir . $neuer_name;

if (move_uploaded_file($file['tmp_name'], $ziel)) {
    echo "Datei erfolgreich hochgeladen.<br>";
    echo "Gespeichert als: " . htmlspecialchars($neuer_name);
} else {
    echo "Fehler beim Speichern der Datei.";
}


?>