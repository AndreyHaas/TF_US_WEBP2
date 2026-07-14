<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 6 vom Tag 2 (14.07.2026)</title>
</head>
<body>
    <p>
        Folgend erwünschte Ausgabe, wobei eine FOR-Schleife verwendet werden soll.<br>
        Initialisierung, Bedingung, Aktualisierung soll im Schleifenkopf erfolgen.<br>
        <img src="../img/a41.png" alt="Beschreibung des Bildes" width="200"><br><br><br>             
    </p>
    <?php
        echo "-";
        for($i = 1; $i <= 10; $i++){
            echo $i." - ";
        }
        echo "<br>";
    ?>
    <hr>
    <?php
        echo "--";
        for($i = 10; $i >= 0; $i--){
            echo $i." -- ";
        }
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->