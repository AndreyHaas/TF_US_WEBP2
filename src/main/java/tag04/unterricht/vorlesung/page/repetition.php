<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Wiederholung Tag 4 am 16.07.2026</title>
</head>
<body>
    <h1>Wiederholung von Tag 3</h1>
    <p>
        Wiederholung: Code in Funktion auslagern. 
        Checken Sie auch die Division durch 0. 
        Arbeiten Sie dabei mit der verkürzten Schreibweise, die Sie gestern kennengelernt haben.
    </p>
    <img src="../img/a0.png" alt="Beschreibung des Bildes" width="150"><br><br><br>   
    <?php
        $wert1 = 2;
        $wert2 = 2;

        function calculation($wert1, $wert2, $operator){
            switch($operator){
              case '+': return $wert1 + $wert2;
              case '-': return $wert1 - $wert2;
              case '*': return $wert1 * $wert2;
              case '/': return $wert2 != 0 ? $wert1 / $wert2 : "Fehler: Division durch 0";
              default: return "Ungültiger Operator";
            }
          }
      
        echo "Addition: ".calculation($wert1, $wert2, '+')."<br><br>";
        echo "Subtraktion: ".calculation($wert1, $wert2, '-')."<br><br>";
        echo "Multiplikation: ".calculation($wert1, $wert2, '*')."<br><br>";   
        echo "Division: ".calculation($wert1, $wert2, '/')."<br><br>"; 
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->