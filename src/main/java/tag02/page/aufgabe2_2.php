<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 3 vom Tag 2 (14.07.2026)</title>
</head>
<body>
    <p>   
        Erwünschte Ausgabe mit IF-ELSE formulieren:<br>
        <img src="../img/a22.png" alt="Beschreibung des Bildes" width="150"><br><br><br>     
    </p>
    <?php
        $i= 5;
        $x = 2;

        echo "<p>Der Wert von i ist $i </p>";
        echo "<p>Der Wert von x ist $x </p>";

        if($i > $x)
            echo $i. " ist größer als ".$x; 
        else
            echo $i. " ist NICHT größer als ".$x;  
            
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->