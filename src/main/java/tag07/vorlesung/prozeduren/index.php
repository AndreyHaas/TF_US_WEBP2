<?php
echo "In der Praxis spricht man in PHP einfach von Funktionen, unabhängig davon, ob sie einen Wert zurückgeben oder nicht. 
Der Begriff Prozedur stammt aus der allgemeinen Programmierung und dient hauptsächlich dazu, 
Funktionen ohne Rückgabewert von Funktionen mit Rückgabewert zu unterscheiden.<br><br><br>";

echo "2 Beispiele für eine Prozedur:";
function begruessung($name){
    echo "<br>Ausgabe 1: Hallo, $name!";
}
begruessung("Max");
echo "<br>Ausgabe 2: ";
function addiere(){
    echo 4 + 4;
}
addiere();

echo "<br><br><br>Beispiel für eine Funktion:<br>";
function addiere1($a,$b){
    return $a + $b;
}
echo "Ausgabe: ".addiere1(4,4);



echo "<br><br><br>Unterschiede:<br>";
echo "<table border=1><tr>";
echo "<td>Prozedur</td>";
echo "<td>Funktion</td>";
echo "</tr><tr>";
echo "<td>Führt eine Aufgabe aus.</td>";
echo "<td>Führt eine Aufgabe aus und gibt einen Wert zurück.</td>";
echo "</tr><tr>";
echo "<td>Kein return erforderlich.</td>";
echo "<td>return erforderlich.</td>";
echo "</tr><tr>";
echo "<td>Findet Verwendung bei einer Ausgabe von Text.</td>";
echo "<td>Findet Verwendung im Kontext von Berechnungen.</td>";
echo "</tr><tr></table>";
?>