<?php
$datei = fopen("beispiel.txt","w");

if($datei){
    fwrite($datei,"\nDas ist ein Text.\n");
    fwrite($datei,"Noch eine Zeile.");
    fclose($datei);
}else{
    echo "Datei konnte nicht geöffnet";
};

echo "Datei wird mit WHILE gelesen";
$datei = fopen("beispiel.txt","r");
if($datei){
    while(!feof($datei)){
        $zeile = fgets($datei);
        echo $zeile."<br>";
    }
    fclose($datei);    
};

echo "<br><br>Datei wird mit file_get_contens() gelesen";
$datei = fopen("beispiel.txt","r");
$inhalt = file_get_contents("beispiel.txt");
echo nl2br($inhalt);

echo "<br>";

echo "<br><br>Datei wird mit fread() und filesize() gelesen";
if($datei){
    $inhalt = fread($datei,filesize("beispiel.txt"));
    fclose($datei);   
    echo nl2br($inhalt); 
};


?>

<!--
Quellenangaben für fopen:
https://www.php.net/manual/function.fopen.php
-->