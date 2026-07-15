<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 1 vom Tag 3 (15.07.2026)</title>
</head>
<body>
    <p>
        Zweidimensionales Array mit zwei FOR-Schleifen füllen<br>
        <img src="../img/a1.png" alt="Beschreibung des Bildes" width="150"><br><br><br>    
    </p>
    <?php
        $array = array();
        for($i = 0; $i < 2; $i++){
            for($x = 0; $x < 2; $x++){
                $array[$i][$x] = $x + 5;
            }
        };
        echo "Mit pre:<br>";
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        echo "<br><br><br>";
        echo "Mit var_dump:<br>";
        var_dump($array);
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
