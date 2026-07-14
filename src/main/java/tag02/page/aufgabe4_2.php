<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 7 vom Tag 2 (14.07.2026)</title>
</head>
<body>
    <p>
        Folgend erwünschte Ausgabe, wobei eine FOR-Schleife verwendet werden soll.<br>
        Aktualisierung soll im Schleifenkopf und die Bedingung soll im Schleifenrumpf erfolgen.<br>
        <img src="../img/a42.png" alt="Beschreibung des Bildes" width="200"><br><br><br>             
    </p>
    <H1>
        FOR-Schleife (Beispiel 1)
    </H1>
    <h2>
        Initialisierung, Aktualisierung im Schleifenkopf<br>
        Bedingung im Schleifenrumpf
    </h2>
    <?php
        for($i = 1; ; $i++){
            if($i > 10)
                break;
            echo $i;
        }
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->