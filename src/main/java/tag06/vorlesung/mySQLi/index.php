<?php
require_once('datenbank_mysqli.php');
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Bücherübersicht</title>
        <style>
            body{
                font-family:Arial, sans-serif;
                padding:2rem;
                background: #f9f9f9;
            }
            h1{
                color: #004466;
            }
            table{
                border-collapse: collapse;
                width: 100%;
                margin-top: 2vh;
                border: 0.5rem solid black;
            }
            th,td{
                border: 0.5rem solid #aaa;
                padding:2rem 4rem;
            }
            th{
                background: #cce0e0;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <h1>Ausgabe mit mysqli</h1>
        <h2>Bücher in der Bibliothek:</h2>
        <?php if($result && $result->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Autor</th>
                    <th>Verlag</th>
                    <th>Ort</th>
                    <th>ISBN</th>
                    <th>Erscheinungsjahr</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['titel']); ?></td>
                        <td><?php echo htmlspecialchars($row['autor_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['verlag_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['verlag_ort']); ?></td>
                        <td><?php echo htmlspecialchars($row['isbn']); ?></td>
                        <td><?php echo htmlspecialchars($row['erscheinungsjahr']); ?></td>                     
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        <?php else: ?>
            <p>Keine Daten gefunden</p>
        <?php endif;
        $conn -> close();
        ?>
    </body>
</html>
<!-- https://www.php.net/ -->