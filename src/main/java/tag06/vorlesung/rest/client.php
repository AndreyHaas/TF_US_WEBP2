<?php

$url = "http://localhost/webp2FuerTeilnehmer1/tag6/Rest/service.php";
$json = file_get_contents($url);
$daten = json_decode($json,true);
echo"<pre>";
print_r($daten);
echo"</pre>";

?>
