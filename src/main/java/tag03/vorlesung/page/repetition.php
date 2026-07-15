<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Wiederholung Tag 3 am 15.07.2026</title>
</head>
<body>
    <h1>Wiederholung von Tag 2</h1>
    <h2>
        Wiederholung: Operatoren in Kombination mit Schleifen und Vergleichsoperatoren ( z.Bsp.: == ,!= ,< , >, <>). Weisen Sie der Variablen $wert1 und $wert2 Werte zu, so dass Sie die 
        untenstehende Ausgabe visualisieren können.  
    </h2>
    <?php
      $wert1 = 2;
      $wert2 = 2;
    ?>
    <?php
        for($i=0;$i<4;$i++){
            if($i == 0) {                   
                echo "Addition: ".$wert1 + $wert2."<br><br>";
            }
            if($i == 1) {                   
                echo "Multiplikation: ".$wert1 * $wert2."<br><br>";
            }
            if($i == 2) {                   
                echo "Division: ".$wert1 / $wert2."<br><br>";
            }
            if($i == 3) {                   
                echo "Subtraktion: ".$wert1 - $wert2."<br><br>";
            }
        };
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
