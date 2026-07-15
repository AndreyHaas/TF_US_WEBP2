<?php
    include_once "../function/function.php";
?>
<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 10 vom Tag 3 (15.07.2026)</title>
</head>
<body>
    <p>
        Folgend erwünschte Ausgabe. Diesmal sollen Funktionen in dem Verzeichnis Funktion in der Datei funktion.php verortet werden.<br>
        <img src="../img/a10.png" alt="Beschreibung des Bildes" width="200"><br><br><br>    
    </p>
    <?php
        $i = 5;
        $x = 2;
        $z = 3;
    ?>
    Ausgabe mit 5 und 2:<br>
    <hr>
    <?php
        $result = Outsourced_if_else_with_param_return($i,$x);
        print_r($result);
    ?><br><br>
    Ausgabe mit 2 und 3:<br>   
    <?php
        $result1 = Outsourced_if_else_with_param_return($i,$z);
        print_r($result1);
    ?><br><br>
        Ausgabe mit 2 und 2: <br>   
    <?php
        $result2 = Outsourced_if_else_with_param_return($x,$x);
        print_r($result2);
    ?><br><br>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
