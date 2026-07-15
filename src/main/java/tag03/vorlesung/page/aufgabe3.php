    <!DOCTYPE HTML>
    <head>
        <meta charset="utf-8">
        <title>Übungsaufgabe 3 vom Tag 3 (15.07.2026)</title>
    </head>
    <body>
        <p>
            Erzeugen Sie folgende Ausgaben: Einmal mit dem SWITCH-CASE-Konstrukt und einmal mit IF-ELSE-ELSE-Verzweigung.<br>
            <img src="../img/a3.png" alt="Beschreibung des Bildes" width="150"><br><br><br>    
        </p>
        <?php
            $i = 5;
            echo "switch statement:<br>";
            switch($i){
                case 0:
                    echo "$i ist gleich 0";
                    break;
                case 1:
                    echo "$i ist gleich 1";
                    break;
                case 2:
                    echo "$i ist gleich 2";
                    break;
                case 3:
                    echo "$i ist gleich 3";
                    break;
                default:
                    echo "$i ist nicht zwischen 0 und 3";
            }
            echo "<br><br><br>ist equivalent zu IF-ELSEIF-ELSE:<br>";
            if($i==0){
                echo "$i ist gleich 0";
            }elseif($i == 1){
                echo "$i ist gleich 1";
            }elseif($i == 2){
                echo "$i ist gleich 2";
            }elseif($i == 3){
                echo "$i ist gleich 3";
            }else{
                echo "$i ist nicht zwischen 0 und 3";
            }

        ?>
    </body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
