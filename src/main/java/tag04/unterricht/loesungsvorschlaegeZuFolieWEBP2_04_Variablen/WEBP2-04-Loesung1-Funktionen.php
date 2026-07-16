<?php
	function mischen(&$ergebnis){
		$meineZiehung = array();
		for($index = 0; $index < 49; $index++){
			$meineZiehung[$index] = $index+1;
		}
		shuffle($meineZiehung);
		for($index = 0; $index < 6; $index++){
			$ergebnis[$index] = $meineZiehung[$index];
		}
		sort($ergebnis);
	}
?>