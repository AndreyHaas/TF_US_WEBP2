<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 10 vom Tag 2 (14.07.2026)</title>
</head>
<body>
    <p>
        Folgend erwünschte Ausgabe:<br>
        <img src="../img/a51.png" alt="Beschreibung des Bildes" width="100"><br><br><br>    
    </p>
    <!--<h2>
        Aktualisierung und die Bedingung im Schleifenrumpf
    </h2>-->
    <?php
        $array = array(0);
        for($i = 1, $j = 10; $i < 12; $j--, $i++){
            $array[$i-1] = $j;
        };
        echo "<pre>";
        print_r($array);
        echo "</pre>";        
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->