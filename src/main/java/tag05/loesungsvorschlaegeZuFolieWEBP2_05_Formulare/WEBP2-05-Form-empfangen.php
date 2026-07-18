<?php

	// $_GET ist eine superglobale Variable, die Daten enthält, die mit der Methode "get" verschickt wurden
	// $_POST ist eine superglobale Variable, die Daten enthält, die mit der Methode "post" verschickt wurden

	echo htmlspecialchars($_POST["Vorname"]) . "<br>";
	echo htmlspecialchars($_POST["Nachname"]) . "<br>";
	echo htmlspecialchars($_POST["Alter1"]) . "<br>";
	
	
	// Eine Prüfung über "htmlspecialchars" ist hier nicht möglich,
	// weil es sich um ein Array und nicht um einen String handelt
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
?>
