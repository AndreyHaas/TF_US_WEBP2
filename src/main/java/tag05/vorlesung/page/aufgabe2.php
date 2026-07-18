<?php
$data = "Das ist eine neue Zeile.";
$file = "meine_txt_datei.txt";

file_put_contents($file,$data);
$content = file_get_contents($file);

if($content === false)
    echo "Fehler beim Lesen der Datei";
else{
    for($i = 1; $i < 3; $i++){
        switch($i){
            case 1:
                echo "<br>Erstes Lesen: ".$content;
                break;
            case 2:
                echo "<br>Zweites Lesen: ".$content;
                break;
            default:
                echo "";
        }
    }
}
?>

<!--
Quellenangaben für fopen:
https://www.php.net/manual/function.fopen.php
-->