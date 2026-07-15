<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 5 vom Tag 3 (15.07.2026)</title>
</head>
<body>
    <p>
        Schreiben Sie eine Funktion ohne Übergabe- und ohne Rückgabewert. In dieser Funktion verwenden Sie die FOR-Schleife, um die Zahlen von 1 bis 10 auszugeben. Die Funktion soll nicht ausgelagert werden.  
    </p>
    <?php
        function function_without_param_without_result_a5(){
            for($i=1;$i<11;$i++){
                echo $i;
            }
        }
        function_without_param_without_result_a5();
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
