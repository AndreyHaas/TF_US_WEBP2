<?php
// Prüfen, ob Dateien gesendet wurden
if (!isset($_FILES['dateien'])) {
    die("Keine Dateien empfangen.");
}

$files = $_FILES['dateien'];

// Upload-Ordner
$upload_dir = __DIR__ . '/uploads_1/';

if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// Erlaubte Dateiendungen
$allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'txt'];

// Max. Dateigröße (5 MB)
$max_size = 5 * 1024 * 1024;

echo "<h3>Upload-Ergebnisse:</h3>";

for ($i = 0; $i < count($files['name']); $i++) {

    // Fehler prüfen
    if ($files['error'][$i] !== UPLOAD_ERR_OK) {
        echo "Fehler bei Datei " . htmlspecialchars($files['name'][$i]) . "<br>";
        continue;
    }

    $name = $files['name'][$i];
    $tmp  = $files['tmp_name'][$i];
    $size = $files['size'][$i];

    // Dateiendung prüfen
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

    if (!in_array($ext, $allowed_ext)) {
        echo "Dateityp nicht erlaubt: " . htmlspecialchars($name) . "<br>";
        continue;
    }

    // Größe prüfen
    if ($size > $max_size) {
        echo "Datei zu groß: " . htmlspecialchars($name) . "<br>";
        continue;
    }

    // Sicherer Dateiname
    $new_name = uniqid('file_', true) . '.' . $ext;

    // Dateien verschieben
    if (move_uploaded_file($tmp, $upload_dir . $new_name)) {
        echo "Hochgeladen: " . htmlspecialchars($name) . " → " . htmlspecialchars($new_name) . "<br>";
    } else {
        echo "Fehler beim Speichern: " . htmlspecialchars($name) . "<br>";
    }
}


?>