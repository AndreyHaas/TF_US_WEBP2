<?php
	echo "<pre>";
	print_r($_FILES["datei"]);
	echo "</pre>";

	$endungen = array("pdf", "txt", "docx");

	$meineDatei = $_FILES["datei"]["name"];
	$endung = explode(".", $meineDatei); // Splitte den Dateinamen am "." und schreibe die Werte in ein Array
	$endung = end($endung); // Nimm das letzte Element des Arrays
	
//	if(in_array(substr($meineDatei, -3), $endungen)){ // Klappt prima für 3-stellige Datei-Endungen. Beispiel: .docx klappt nicht
	if(in_array($endung, $endungen) && $_FILES["datei"]["size"] < 1000000){
		echo "<b>Super. Die Datei nehm ich</b><br>";
		move_uploaded_file($_FILES["datei"]["tmp_name"], "meineDateien/" . $_FILES["datei"]["name"]);
	}else{
		echo "Schade. Die Datei ist nicht zulässig<br>";
	}

	$verz = opendir("./meineDateien/");
	
	while (($file = readdir($verz)) !== false){
		echo "Dateiname:" . $file . "<br>";
    }
	
	closedir($verz);

?>
