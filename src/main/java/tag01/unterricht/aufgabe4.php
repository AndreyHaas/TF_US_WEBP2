<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Aufgabe 3 vom 13.07.2026</title>
</head>
<body>
    <h1>
    Speichern Sie Länge und Breite eines Rechtecks in Variablen!
    Berechne Sie dann den Flächeninhalt. Verwenden Sie die Mischform!
    </h1>
    <?php
        $laenge = 8;
        $breite = 4;
        $flaeche = $laenge * $breite;
    ?>

<div style="background-color:red; color:black; padding:1px;">
    <p>Die Länge beträgt <?php echo $laenge; ?>.</p>
    <p>Der Wert von Zahl 2 ist <?php echo $breite; ?>.</p>
    <p>Die Fläche beträgt <?php echo $flaeche; ?>.</p>
</div>

</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->