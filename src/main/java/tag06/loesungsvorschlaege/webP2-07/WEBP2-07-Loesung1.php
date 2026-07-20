<html>
	<head>
		<title>Datenerfassung</title>
	</head>
	<body>
		<form action="WEBP2-07-Loesung1.php" method="post">
		<table>
			<tr><td width=100>Mieter:</td><td><input type="text" name="mieter" required/></td></tr>
			<tr><td width=100>Quadratmeter:</td><td><input type="text" name="qm" required/></td></tr>
			<tr><td width=100>Zeitraum:</td><td><input type="radio" name="zeit" value="m" checked />monatlich</td></tr>
			<tr><td width=100> </td><td><input type="radio" name="zeit" value="j"/>jährlich</td></tr>
			<tr><td width=100>Miete:</td><td><input type="text" name="miete" required/></td></tr>
			<tr><td colspan="2"><input type="submit" value="eintragen" /></td></tr>
		</table>
		</form>
	</body>
</html>

<?php
	$dateiname = "WEBP2-07-Loesung1.txt";
	
	if(isset($_POST["mieter"]))
	{
		$mieter = $_POST["mieter"];
		$qm = $_POST["qm"];
		$zeit = $_POST["zeit"];
		$miete = $_POST["miete"];
		
		$datei = fopen($dateiname, "a");
		fwrite($datei, "<td>$mieter</td><td>$qm</td><td>$zeit</td><td>$miete</td>\r\n");
		fclose($datei);
	}
	if (file_exists(realpath($dateiname))){
		$datei = fopen($dateiname, "r");
	
		echo "<h2>Inhalt der Datei</h2>";
		echo "<table border=1>";
		echo "<tr><th>Mieter</th><th>Quadratmeter</th><th>Zeitraum</th><th>Miete</th></tr>";

		while(!feof($datei)){
			$zeile = fgets($datei);
			echo "<tr>";
			echo "$zeile";
			echo "</tr>";
		}
		echo "</table>";
		fclose($datei);
	}
?>
