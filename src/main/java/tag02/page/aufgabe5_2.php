<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 11 vom Tag 2 (14.07.2026)</title>
</head>
<body>
    <p>
        Folgend erwünschte Ausgabe, wobei array_fill verwendet werden soll.<br>
        <img src="../img/a51.png" alt="Beschreibung des Bildes" width="100"><br><br><br>    
    </p>
    <?php
        $array1 = array_fill(0, 10, 0);
        
        for($i = 1, $j = 10; $i < 11; $j--, $i++){
            $array1[$i-1] = $j;
        };
        echo "<pre>";
        print_r($array1);
        echo "</pre>";        
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->