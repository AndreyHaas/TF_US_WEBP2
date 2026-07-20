<?php
// Erzeuge eine Session (aktuelle Sitzung, bis der Browser geschlossen wird,
// oder ich die Session zerstöre)
// Traditionell wird session_start() immer ganz am Anfang eines php-Scripts benutzt.
	session_start();
	
	$name = htmlspecialchars($_POST["meinName"]);
	echo $name;
	
	// $_SESSION (superglobal) enthält zu Beginn nichts. Ich kann diese Variable mit beliebigen
	// Werten füllen. Das können Einzel-Werte oder Arrays sein.
	$_SESSION["dername"] = $name;
	$_SESSION["info"] = "Guter Kunde";
	
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
?>

<a href="WEBP2-06-session2.php">Klick mich, um zur nächsten Seite zu kommen</a>