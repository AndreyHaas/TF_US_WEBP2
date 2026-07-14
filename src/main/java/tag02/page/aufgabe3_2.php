<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 5 vom Tag 2 (14.07.2026)</title>
</head>
<body>
    <p>
        Erwünschte Ausgabe mit einer WHILE-Schleife formulieren:<br>
        <img src="../img/a32.png" alt="Beschreibung des Bildes" width="120"><br><br><br>         
    </p>
    <?php
        $x = 1;
        $i = 1;
        while($i <= 10){
            echo "Durchlauf: ".$x. " liefert ".$i++."<br>";
            $x+=1;            
        };
        echo "<br>";    
    ?>
    <hr>
    <?php
        $a = 1;
        $b = 10;
        while($b >= 1){
            echo "Durchlauf: ".$a. " liefert ".$b--."<br>";
            $a+=1;         
        };    
    ?>    
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->