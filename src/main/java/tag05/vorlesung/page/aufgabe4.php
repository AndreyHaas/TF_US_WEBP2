<?php
$dateipfad = "geburtstage.txt";

if(file_exists($dateipfad)){
    $handle = fopen($dateipfad,"r");
    if($handle){
        while(!feof($handle)){
            $zeile = trim(fgets($handle));
            if($zeile === "")
                continue;
            list($datum,$name) = explode(";",$zeile);
            // neues Aray gebaut: key ist das Datum, Value der Name
            $geburtstage[trim($datum)] = trim($name);
        }
        fclose($handle);
    }
}

$monat = date("m");
$jahr = date("Y");
$ersterTag = mktime(0,0,0,$monat,1,$jahr);
$tageImMonat = date("t",$ersterTag);
$wochentag = date("N",$ersterTag);
$monatName = strftime("%B %Y",$ersterTag);

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geburtstagskalender</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <h1>Geburtstagskalender</h1>
        <pclass="subtitle"><?php echo htmlspecialchars($monatName); ?></p>
    </header>

    <main>
        <section class="calendar-container">
            <table class="calendar">
                <thead>
                    <tr>
                        <th>Mo</th>
                        <th>Di</th>
                        <th>Mi</th>
                        <th>Do</th>
                        <th>Fr</th>
                        <th>Sa</th>
                        <th>So</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
$tag = 1;
$zeile = 1;

for(; $tag <= $tageImMonat; $tag++, $zeile++){
    $tt = str_pad($tag, 2, "0", STR_PAD_LEFT);//https://www.php.net/manual/de/function.str-pad.php
    $key = "$tt.$monat";

    $class = array_key_exists($key,$geburtstage)?"birthday":"";

    echo "<td class='".$class."' >";
    echo "<div class='day-number'>".$tag."</div>";

    if($class){
        echo "<div class='name'>".htmlspecialchars($geburtstage[$key])."</div>";
    }
    echo "</td>";
    if($zeile%7 == 0)echo"</tr><tr>";
}
while($zeile%7 != 1)
{
    echo"<td></td>";
    $zeile++;
}
                        ?>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <!-- Jahr aus datum extrahieren -->
        <p>von uns für euch  :-) <?php echo date('Y');?> &copy; by Carola & Micha </p>
    </footer>
</body>

</html>

<!--
Quellenangaben für fopen:
https://www.php.net/manual/function.fopen.php
-->