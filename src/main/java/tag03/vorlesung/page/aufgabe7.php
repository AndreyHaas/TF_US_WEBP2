<?php
    function do_while_with_praram_without_return_a7($count){
        do{
            echo $count;
            $count++;
        }while($count < 11);
    }
?>
<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 7 vom Tag 3 (15.07.2026)</title>
</head>
<body>
    <p>
        Schreiben Sie eine Funktion mit Parameter und ohne Rückgabewert. Verwenden Sie die fussgesteuerte DO-WHILE-Schleife, 
        um die Zahlen von 1 bis 10 auszugeben. Die Funktion soll nicht ausgelagert werden.
    </p>
    <?php
        $i = 1;
        do_while_with_praram_without_return_a7($i);
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
