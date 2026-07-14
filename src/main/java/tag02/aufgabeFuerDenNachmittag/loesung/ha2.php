<?php
$daten = [
    ["Name", "Alter", "Stadt"],
    ["Anna", 25, "Berlin"],
    ["Ben", 30, "München"],
    ["Clara", 22, "Hamburg"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2D-Array als Tabelle</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <?php
    foreach ($daten as $zeile) {
        echo "<tr>";
        foreach ($zeile as $zelle) {
            if ($zeile === $daten[0]) {
                echo "<th>" . $zelle . "</th>";
            } else {
                echo "<td>" . $zelle . "</td>";
            }
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>