<?php
	$mein2dimArray[] = array(1,2,3,4,5);
	$mein2dimArray[] = array(3,4,5,6,7);
	$mein2dimArray[] = array(3.1415, 2.1234, 12.456, 44.345, 66.666);
	$mein2dimArray[] = array("Hansi", "Hugo", "Björn", "Malte", "Susi");
	
	// Ausgabe des Arrays $mein2dimArray als HTML-Tabelle
	echo "<table border=1>";
	for($aussen = 0; $aussen < count($mein2dimArray); $aussen++){
		echo "<tr>";
		for($innen = 0; $innen < count($mein2dimArray[$aussen]); $innen++){
			echo "<td>" . $mein2dimArray[$aussen][$innen] . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>