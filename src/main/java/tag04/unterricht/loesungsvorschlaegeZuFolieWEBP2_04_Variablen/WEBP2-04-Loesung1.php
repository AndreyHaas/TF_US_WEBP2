<?php
	// Externe Dateien einbinden
	
	// 1. REQUIRE
	// Lädt eine ERFORDERLICHE Datei und gibt heftige Fehlermeldungen aus,
	//	falls die Datei nicht existiert
	require "WEBP2-04-Loesung1-Funktionen.php";
	
	// 2. INCLUDE
	// Lädt eine ggf. benötigte Datei und gibt Warnings aus,
	//	falls die Datei nicht existiert
	//include "Lotto_Aufgabe_Funktionen.php";
	include  "WEBP2-04-Loesung1-HTML_Start.txt";

	// 1. REQUIRE_ONCE
	// Lädt eine ERFORDERLICHE Datei und gibt heftige Fehlermeldungen aus,
	//	falls die Datei nicht existiert. Tut dies nur EIN mal und merkt sich, ob die Datei schon geladen wurde.
	//require_once "Lotto_Aufgabe_Funktionen.php";
	
	// 2. INCLUDE_ONCE
	// Lädt eine ggf. benötigte Datei und gibt Warnings aus,
	//	falls die Datei nicht existiert. Tut dies nur EIN mal und merkt sich, ob die Datei schon geladen wurde.
	//include_once "Lotto_Aufgabe_Funktionen.php";
	
	echo "<h2>Die gezogenen Zahlen:\n";
	echo "<h3>\n";
	$gezogen = array();
	mischen($gezogen);
	for($index = 0; $index < 6; $index++){
		echo $gezogen[$index] . " \n";
	}
	echo "</h3></h2>\n";
	
	echo "<h2>Meine Tippreihen:\n";
	for($reihen = 0; $reihen < 8; $reihen++){
		echo "<h3>Tippreihe " . ($reihen+1) . ": \n";
		$getippt = array();
		mischen($getippt);
		
		$treffer = array_intersect($getippt, $gezogen);
		$keintreffer = array_diff($getippt, $gezogen);
		
		for($index = 0; $index < 6; $index++){
//			if(in_array($getippt[$index], $treffer)){
//			if(in_array($getippt[$index], $keintreffer) == false){
			if(in_array($getippt[$index], $gezogen)){ 
				echo "<span class=treffer>" . $getippt[$index] . "</span> ";
			}else{
				echo $getippt[$index] . " ";
			}
		}
		echo "</h3></h2>\n";
	}

	include  "WEBP2-04-Loesung1-HTML_Ende.txt";
?>

