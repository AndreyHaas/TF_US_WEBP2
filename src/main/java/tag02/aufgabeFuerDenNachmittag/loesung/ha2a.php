<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2D-Array als Tabelle (alternative)</title>
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
        $daten = [
            ["Name", "Alter", "Stadt"],
            ["Anna", 25, "Berlin"],
            ["Ben", 30, "München"],
            ["Clara", 22, "Hamburg"]
        ];

    echo "<pre>";

    foreach ($daten as $zeile) {
        foreach ($zeile as $zelle) {
            echo $zelle . "\t";
        }
    echo "\n";
}

echo "</pre>";
?>
</table>

</body>
</html>