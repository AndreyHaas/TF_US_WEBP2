<?php
	$name = $_POST["meinName"];
	echo $name . "<br>";
	
	$keks = "MeinCookie";
	echo $keks . "<br>";
	
	//Aufbau eines Cookies
	// Syntax: setcookie(name des cookies, inhalt des cookies, lebensdauer, pfad);
	// Der Inhalt (Parameter 2) darf nur ein String sein. Nichts anderes.
	setcookie($keks, $name, time() + 10, "/" );

	//	setcookie($keks, $name, time() - 10, "/" ); // Zerstört den Cookie durch eine Lebensdauer, die in der Vergangenheit endet
?>

<a href = "WEBP2-06-cookies2.php">Klick für weiter</a>
