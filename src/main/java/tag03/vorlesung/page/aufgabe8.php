<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 8 vom Tag 3 (15.07.2026)</title>
</head>
<body>
    <p>
        Schreiben Sie eine Funktion mit Parameter und mit Rückgabewert. Verwenden Sie die IF-ELSE-Verzweigung, 5 ist größer als 2 auszugeben. Die Funktion soll nicht ausgelagert werden.
    </p>
    <?php
        $i = 5;
        $x = 2;
        // so:
        $result = function_if_else_with_param_with_return_a8($i,$x);
        print_r($result);
        echo "<br>";

        // oder so:
        print_r(function_if_else_with_param_with_return_a8($i,$x));
    ?>
</body>
</html>
<?php
    function function_if_else_with_param_with_return_a8($number_1,$number_2){
        if($number_1 > $number_2)
            return $number_1." ist größer als ".$number_2;
        else
            return $number_2." ist größer als ".$number_1;
    }
?>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
