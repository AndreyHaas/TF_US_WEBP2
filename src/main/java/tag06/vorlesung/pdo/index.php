<?php
require_once('datenbank_pdo.php');
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
        <h1>Ausgabe mit PDO</h1>
        <h2>Liste der Bücher (einfaches Format)</h2>
        <table>
            <?php if(count($daten) > 0): ?>
            <tr>
                <td>
                    <ul>
                        <?php foreach ($daten as $buch): ?>
                        <li>
                            <strong><?php echo htmlspecialchars($buch['titel']); ?></strong><br>
                            <strong><?php echo htmlspecialchars($buch['autor_name']); ?></strong><br>
                            <strong><?php echo htmlspecialchars($buch['verlag_name']); ?></strong><br>
                            <strong><?php echo htmlspecialchars($buch['verlag_ort']); ?></strong><br>
                            <strong><?php echo htmlspecialchars($buch['isbn']); ?></strong><br>
                            <strong><?php echo htmlspecialchars($buch['erscheinungsjahr']); ?>
                        </li>
                        <hr>
                        <?php endforeach; ?>  
                    </ul>
                    <?php else:  ?>
                    <p>Keine Bücher gefunden</p>
                    <?php endif;  
                    $pdo -> close();
                    ?>
                </td>  
            </tr>
        </table>
    </body>
</html>
<!-- https://www.php.net/ -->