<?php
    function function_if_else_with_param_with_return_a9($number_1, $number_2){
        if($number_1 > $number_2){
            switch($number_1){
                case 3:
                case 4:
                    $temp = $number_1;
                    break;
                default:
                    $temp = $number_1;
            }
            return $temp." ist größer als ".$number_2;
        } else {
            if($number_2 != $number_1){
                return $number_2." ist größer als ".$number_1.".";
            } else {
                return $number_2." ist gleich ".$number_1.".";
            };
        };
    }
?>
<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 9 vom Tag 3 (15.07.2026)</title>
</head>
<body>
    <p>
        Schreiben Sie eine Funktion, die nicht ausgelagert ist. In dieser Funktion nutzen Sie bitte ein verschachteltes IF-ELSE. 
        In der IF-Anweisung nutzen Sie bitte ein switch(), um zu selektieren. 
        In der ELSE-Anweisung nutzen Sie bitte eine IF-ELSE-Anweisung, um zu entscheiden, ob Werte gleich oder ungleich sind.
    </p>
    <?php
        $i = 9;
        $x = 3;

        // so:
        $result = function_if_else_with_param_with_return_a9($i, $x);
        print_r($result);
        echo "<br>";

        // oder so:
        print_r(function_if_else_with_param_with_return_a9($x,$x));
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
