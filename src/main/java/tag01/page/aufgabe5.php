<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Aufgabe 5 vom 13.07.2026</title>
</head>
<body>
    <h1>
    Konvertieren Sie eine Temperatur von Celsius nach Fahrenheit: F = C * 1.8 + 32. Verwenden Sie die Mischform!
    </h1>
    <div>
        <?php
            $celsius = 20;
            $fahrenheit = $celsius * 1.8 + 32;
        ?>
        <p>
            <?php echo $celsius; ?> Grad Celsius sind
            <?php echo $fahrenheit; ?> Grad Fahrenheit.
        </p>
</div>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
