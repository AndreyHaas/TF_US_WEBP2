<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 2 vom Tag 3 (15.07.2026)</title>
</head>
<body>
    <p>
        Jagged Array mithilfe von zwei FOR-Schleifen füllen<br>
        <img src="../img/a2.png" alt="Beschreibung des Bildes" width="150"><br><br><br>    
    </p>
    <?php
        $counter_0 = 2;
        $counter_1 = 3;
        $jagged_array = array();

        for($outside = 0; $outside < 2; $outside++){
            for($inside = 0; $inside < ${'counter_'.$outside}; $inside++){
                $jagged_array[$outside][$inside] = 2 * $inside;
            }
        }
        echo "<pre>";
        print_r($jagged_array);
        echo "</pre>";
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
