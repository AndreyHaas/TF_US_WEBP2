<?php
	session_start();

	$name = $_SESSION["dername"];
	echo $name;
	$info = $_SESSION["info"];
	echo "<br>$info<br>";
?>

<a href="WEBP2-06-session3.php">Klick mich, um zur nächsten Seite zu kommen</a>