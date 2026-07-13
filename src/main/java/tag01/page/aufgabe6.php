<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Aufgabe 6 vom 13.07.2026</title>
</head>
<body>
    <h1>
        Tauschen Sie die Werte von zwei Variablen ($a und $b). Verwenden Sie die Mischform!
    </h1>
    <p>
        <?php
            $a = 5;
            $b = 10;
        ?>
        Vor dem Tausch: a = <?php echo $a; ?>, b = <?php echo $b; ?>
    </p>
    <br><br>
    <p>
        <?php
            $temp = $a;
            $a = $b;
            $b = $temp;
        ?>
        Nach dem Tausch: a = <?php echo $a; ?>, b = <?php echo $b; ?>
    </p>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
