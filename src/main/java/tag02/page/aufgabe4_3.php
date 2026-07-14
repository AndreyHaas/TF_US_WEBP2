<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 8 vom Tag 2 (14.07.2026)</title>
</head>
<body>
    <p>
        Folgend erwünschte Ausgabe, wobei eine FOR-Schleife verwendet werden soll.<br>
        Aktualisierung und Bedingung soll im Schleifenrumpf erfolgen.<br>
        <img src="../img/a42.png" alt="Beschreibung des Bildes" width="200"><br><br><br>
    </p>
    <?php
        $i = 1; // Initialisierung
        for(;;){ //Initialisierung;Bedingung;Aktualisierung würden hier stehen, wenn nicht ausgelagert werden soll
            if($i > 10) // Bedingung
                break;
            echo $i;
            $i++; //Aktualisierung
        };
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->