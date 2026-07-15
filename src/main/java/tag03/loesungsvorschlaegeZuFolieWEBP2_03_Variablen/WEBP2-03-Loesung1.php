<?php
	echo "<b>Variablen mit Zuweisung</b><br/>";
	$i = 5;
	$j = 10;
	$erg = $i + $j;
	echo $erg . "<br/><br/>\n";
	
	echo "\t" . $erg . "<br/>\n";
	echo "\t\t" . $erg . "<br/>\n";
	echo "\t\t\t" . $erg . "<br/><br/>\n";
	
	echo "<b>For-Schleife</b></br>";
	for($index = 0; $index < 10; $index++){
		echo "$index ";
	}

	echo "<br/><br/>";

	echo "<b>While-Schleife</b></br>";
	$laufvar = 0;
	while($laufvar < 10){
		echo "$laufvar ";
		$laufvar++;
	}

	echo "<br/><br/>";
	
	echo "<b>Do-While-Schleife</b></br>";
	$laufvar = 0;
	do{
		echo "$laufvar ";
		$laufvar++;
	}while($laufvar < 10);

	echo "<br/><br/>";
	
	echo "<b>IF</b></br>";
	$abfrage = 7;
	if($abfrage < 10){
		echo "Die Zahl ist kleiner als 10";
	}

	echo "<br/><br/>";

	echo "<b>IF ELSE</b></br>";
	$abfrage = 17;
	if($abfrage < 10){
		echo "Die Zahl ist kleiner als 10";
	}else{
		echo "Die Zahl ist größer oder gleich 10";
	}

	echo "<br/><br/>";

	echo "<b>IF ELSE-IF</b></br>";
	$abfrage = 71;
	if($abfrage < 10){
		echo "Die Zahl ist kleiner als 10";
	}else if ($abfrage > 100){
		echo "Die Zahl ist größer als 100";
	}else{
		echo "Die Zahl liegt zwischen 10 und 100";
	}

	echo "<br/><br/>";

	echo "<b>SWITCH CASE</b></br>";
	$meinText = "Hallo";
	switch($meinText){
		case "Welt":
			echo "Du hast WELT geschrieben";
			break;
		case "Hallo":
			echo "Du hast HALLO geschrieben";
			break;
		case "Lutz":
			echo "Du hast LUTZ geschrieben";
			break;
		default:
			echo "Du hast IRGENDWAS geschrieben";
			break;
	}
	
	echo "<br/><br/>";

	echo "<b>1-Dimensionale Arrays</b></br>";
	$meinArray = [1,2,3,4,5,6];
	for($index = 0; $index < Count($meinArray); $index++){
		echo $meinArray[$index];
		echo " \n";
	}
	
	echo "<br/><br/>";

	foreach($meinArray as $elem){
		echo $elem;
		echo " \n";
	}

	echo "<br/><br/>";

	$dasAndereArray = array("Currywurst", 2, 3, 1.234, 'u', 6);
	for($index = 0; $index < Count($dasAndereArray); $index++){
		echo $dasAndereArray[$index];
		echo " \n";
	}
	
	echo "<br/><br/>";

	foreach($dasAndereArray as $elem){
		echo $elem;
		echo " \n";
	}
	
	echo "<br/><br/>";
	
	$dasAssoziativeArray = array(
		//KEY       //VALUE
		"Paul" => "Currywurst",
		"Susi" => "Schnitzel",
		"Manfred" => "Döner"
	);
	
	foreach($dasAssoziativeArray as $key => $value){
		echo $key;
		echo " hat den Wert \n";
		echo $value;
		echo "<br/>\n";
	}
	
	echo "<br/>";

	// Direkter Zugriff auf einzelne Elemente über den Index
	echo $meinArray[0] ;
	echo "<br>";
	echo $dasAssoziativeArray["Susi"];
	
	echo "<br/><br/>";

	echo "<b>2-Dimensionale Arrays</b></br>";
	$mein2dimArray[] = array(1,2,3,4,5);
	$mein2dimArray[] = array(11,22,33);
	$mein2dimArray[] = array("Susi", "Paul", "Frieda", "Fred");

	for($zeile = 0; $zeile < count($mein2dimArray);$zeile++){
		for($spalte = 0; $spalte < count($mein2dimArray[$zeile]);$spalte++){
			echo $mein2dimArray[$zeile][$spalte];
			echo " ";
		}
		echo "<br/>";
	}

	echo "<br/><br/>";
	
	foreach($mein2dimArray as $mein1dimArray){
		foreach($mein1dimArray as $wert){
			echo $wert;
			echo " ";
		}
		echo "<br/>";
	}
?>