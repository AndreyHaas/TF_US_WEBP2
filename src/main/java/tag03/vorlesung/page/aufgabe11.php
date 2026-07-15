<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Übungsaufgabe 11 vom Tag 3 (15.07.2026)</title>
</head>
<body>
    <p>
        Codieren Sie bitte nachfolgend Ausgabe.<br>
        <img src="../img/a11.png" alt="Beschreibung des Bildes" width="400"><br><br><br>    
    </p>
    <?php
        $jahr= 2028;

        $monate_mit_tagen = [
            'Januar' => range(1,31),
            'Februar' => range(1,date("L", mktime(0,0,0,1,1,$jahr)) ? 29 : 28), //Schaltjahrprüfung
            'März' => range(1,31),
            'April' => range(1,30),
            'Mai' => range(1,31),
            'Juni' => range(1,30),
            'Juli' => range(1,31),
            'August' => range(1,31),
            'September' => range(1,30),
            'Oktober' => range(1,31),
            'November' => range(1,30),
            'Dezember' => range(1,31)
        ];

        echo "<table>";
        echo "<tr>";
        echo "<td><h3>Tage pro Monat im Jahr $jahr: </h3></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo "<table>";
        foreach($monate_mit_tagen as $monat => $tage){
            echo "<tr>";
            echo "<td><strong>$monat:</strong></td>";
            foreach($tage as $tag){
                echo "<td>$tag</td>";
            }
            echo "</tr>";
        }
        echo "</table></td></tr></table>";
    ?>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
