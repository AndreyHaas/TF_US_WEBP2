<?php
	session_start();

	$name = $_SESSION["dername"];
	echo $name;
	$info = $_SESSION["info"];
	echo "<br>$info<br>";
	
	
	// session_unset löscht alle in der Session enthaltenen Variablen/Werte, aber nicht die Session selbst
	session_unset();

	// unset(Session-Variable) löscht NUR die angegebene Variable aus der Session
	//	unset($_SESSION["dername"]);

	// session_destroy() killt die Session, aber nicht die Inhalte der Session-Variablen
	session_destroy();
	
	$name = $_SESSION["dername"];
	echo $name;
	$info = $_SESSION["info"];
	echo "<br>$info<br>";
	
?>

