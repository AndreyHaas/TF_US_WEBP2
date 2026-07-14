<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 4 vom Tag 2 (14.07.2026)</title>
</head>
<body>
    <p>   
        Erwünschte Ausgabe mit WHILE-Schleife formulieren:<br>
        <img src="../img/a31.png" alt="Beschreibung des Bildes" width="300"><br><br><br>     
    </p>
    <?php
        $i= 1;
        echo "--";

        while($i <= 10):
            echo $i. "--";
            $i++; //$i = $i + 1
        endwhile;
        echo "<br>";       
    ?>
    <hr>
    <?php
        $i = 1;
        $y = 10;
        echo "--";

        while($i <= $y):
            echo $y - $i. "--";
            $i++;
        endwhile;
        echo "<br>";       
    ?>    
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->