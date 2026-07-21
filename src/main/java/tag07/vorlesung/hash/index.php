<?php
echo "Der Ausdruck 'HASH' in PHP folgt folgender Logik: Sicheres Speichern und 
Überprüfen von Passwörtern und das Erzeugen von Prüfsummen.<br><br><br>";
$passwort = "Mein geheimes Passwort";

echo "<br>vordefertigte Funktion 'password_hash' nutzen:<br>";
$hash = password_hash($passwort, PASSWORD_DEFAULT);
echo $hash;
echo "<br><br>";
echo "<br>vordefertigte Funktion 'password_verify' nutzen:<br>";
if(password_verify($passwort, $hash)){
    echo "Passwort ist korrekt";
}else
    echo "Passwort nicht korrekt";

echo "<br><br>";
echo "<br>String mit der Funktion 'SHA-256' speichern:<br>";
$hash = hash("sha256","Hallo Welt");
echo $hash;

echo "<br><br>";
echo "<br>String mit der Funktion 'md5' speichern:<br>";
echo md5("Hallo Welt");

echo "<br><br>";
echo "<br>String mit der Funktion 'sha1' speichern:<br>";
echo sha1("Hallo Welt");

echo "<br><br><br>Welche Funktion wofür:<br>";
echo "<table border=1><tr>";
echo "<td>Funktion</td>";
echo "<td>Verwendungszweck</td>";
echo "<td>Für Passwörter geeignet</td>";
echo "</tr><tr>";
echo "<td>password_hash</td>";
echo "<td>Passwort sicher hashen</td>";
echo "<td>Ja</td>";
echo "</tr><tr>";
echo "<td>password_verify()</td>";
echo "<td>Passwort prüfen</td>";
echo "<td>Ja</td>";
echo "</tr><tr>";
echo "<td>hash('sha256', ...)</td>";
echo "<td>Prüfsumme</td>";
echo "<td>Nein</td>";
echo "</tr><tr>";
echo "<td>md5()</td>";
echo "<td>Einfaches Hashes</td>";
echo "<td>Nein</td>";
echo "</tr><tr>";
echo "<td>sha1()</td>";
echo "<td>Einfaches Hashes</td>";
echo "<td>Nein</td>";
echo "</tr><tr></table>";
?>
