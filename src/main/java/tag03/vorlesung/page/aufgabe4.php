<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 4 vom Tag 3 (15.07.2026)</title>
</head>
<body>
    <p>
        Erwünschte Ausgabe mit einer verschachtelte IF-ELSE-Verzweigung formulieren. Nutzen Sie folgende Vergleichsoperatoren: > , == , !=<br>
        <img src="../img/a4.png" alt="Beschreibung des Bildes" width="150"><br><br><br>    
    </p>
    <?php
        $i = 5;
        $x = 2;
        if (!$i > $x){
            echo "i ist größer als x";
        } else {
            if ($i-3 == $x){
                echo "Das Ergebnis von $i - 3 = $x"; 
            } else {
                echo "Das Ergebnis von $i - 3 != $x"; 
            }
        }
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
