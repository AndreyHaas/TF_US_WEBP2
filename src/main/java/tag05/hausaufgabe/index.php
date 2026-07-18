<?php

$verzeichnis = 'meineDaten';
$datei = $verzeichnis . '/datenerfassung.txt';

if (!is_dir($verzeichnis)) {
    mkdir($verzeichnis, 0777, true);
}

$timestamp = date('d.m.Y H:i:s');

$nachricht = '';
$nachricht_typ = ''; // 'success', 'error', 'info'
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name = trim($_POST['name'] ?? '');
    $qm = trim($_POST['qm'] ?? '');
    $zeitraum = trim($_POST['zeitraum'] ?? '');
    $miete = trim($_POST['miete'] ?? '');

    if (empty($name) || empty($qm) || empty($zeitraum) || empty($miete)) {
        $nachricht = 'Bitte alle Felder ausfüllen!';
        $nachricht_typ = 'error';
    } elseif (!is_numeric($qm) || $qm <= 0) {
        $nachricht = 'Bitte eine gültige Quadratmeterzahl eingeben!';
        $nachricht_typ = 'error';
    } elseif (!is_numeric($miete) || $miete <= 0) {
        $nachricht = 'Bitte einen gültigen Mietbetrag eingeben!';
        $nachricht_typ = 'error';
    } else {
        $eintrag = "Datum: $timestamp | Name: $name | qm: $qm | Zeitraum: $zeitraum | Miete: $miete €\n";

        if (file_put_contents($datei, $eintrag, FILE_APPEND | LOCK_EX) !== false) {
            $nachricht = 'Daten erfolgreich gespeichert!';
            $nachricht_typ = 'success';
        } else {
            $nachricht = 'Fehler beim Speichern der Daten!';
            $nachricht_typ = 'error';
        }
    }
}

$daten = '';
if (file_exists($datei)) {
    $daten = file_get_contents($datei);
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betriebskosten erfassen</title>
    <!-- Externes CSS einbinden -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Betriebskosten erfassen</h1>

    <form method="post" action="">
        <h3>Neue Eingabe</h3>
        
        <div class="form-group">
            <label for="name">Name des Mieters:</label>
            <input type="text" id="name" name="name" placeholder="z.B. Max Mustermann" required>
        </div>
        
        <div class="form-group">
            <label for="qm">Quadratmeter der Wohnung:</label>
            <input type="number" id="qm" name="qm" step="0.01" min="1" placeholder="z.B. 75" required>
        </div>
        
        <div class="form-group">
            <label for="zeitraum">Abrechnungszeitraum:</label>
            <select id="zeitraum" name="zeitraum" required>
                <option value="">Bitte wählen</option>
                <option value="monatlich">Monatlich</option>
                <option value="jährlich">Jährlich</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="miete">Höhe der Miete (€):</label>
            <input type="number" id="miete" name="miete" step="0.01" min="1" placeholder="z.B. 850.00" required>
        </div>
        
        <div class="form-group">
            <input type="submit" name="submit" value=" Daten speichern" class="button">
        </div>

        <?php if (!empty($nachricht)): ?>
            <div class="message message-<?php echo $nachricht_typ; ?>">
                <?php echo htmlspecialchars($nachricht); ?>
            </div>
        <?php endif; ?>
    </form>

    <h2>Bisherige Eingaben</h2>
    <div class="output">
        <?php
        if (!empty($daten)) {
            echo nl2br(htmlspecialchars($daten));
        } else {
            echo '<span class="output-empty"> Bisher wurden noch keine Daten erfasst.</span>';
        }
        ?>
    </div>
    <div class="hinweis">
        Die Daten werden in der Datei <strong>"<?php echo $datei; ?>"</strong> gespeichert.
    </div>

</body>
</html>
