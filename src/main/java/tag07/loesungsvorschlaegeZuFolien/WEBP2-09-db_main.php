
<form action="WEBP2-09-db_main.php" method="post">
	<p>Preis: <input type="text" name="preisfeld">
	<p><input type="submit">
</form>

<?php
	require "WEBP2-09-db_class.php";
	$db = new DB();
	$conn = $db->GetConnection();
	
	print_r($conn);

	$ergebnis = $db->ZeigeDBs($conn);

	echo "<pre>";
	print_r($ergebnis);
	echo "</pre>";

	echo "<br><br>";

	/* Alter Stand
	if(!ISSET($_POST) && empty($_POST)){
		echo "<h1>NICHT ISSET UND EMPTY</h1>";
		$meinPreis = "nix";
	}else{
		echo "<h1>Der ELSE-Fall</h1>";
		$meinPreis = $_POST["preisfeld"];
	}
	*/
	
	// Verbesserungsversuch 1
	if(!ISSET($_POST["preisfeld"]) && empty($_POST["preisfeld"])){
		echo "<h1>NICHT ISSET ODER EMPTY</h1>";
		$meinPreis = "nix";
	}else{
		echo "<h1>Der ELSE-Fall</h1>";
		$meinPreis = $_POST["preisfeld"];
	}
	

	/* Verbesserungsversuch 2
	if(!ISSET($_POST["preisfeld"]) || empty($_POST["preisfeld"])){
		echo "<h1>NICHT ISSET ODER EMPTY</h1>";
		$meinPreis = "nix";
	}else{
		echo "<h1>Der ELSE-Fall</h1>";
		$meinPreis = $_POST["preisfeld"];
	}
	*/
	
	/* Verbesserungsversuch 3
	if(!ISSET($_POST["preisfeld"]) || $_POST["preisfeld"] ==""){
		echo "<h1>NICHT ISSET ODER KEIN INHALT</h1>";
		$meinPreis = "nix";
	}else{
		echo "<h1>Der ELSE-Fall</h1>";
		$meinPreis = $_POST["preisfeld"];
	}
	*/
	
	/* Verbesserungsversuch 4
	if(!ISSET($_POST["preisfeld"]) || $_POST["preisfeld"] =="" || !is_numeric($_POST["preisfeld"])){
		echo "<h1>NICHT ISSET ODER KEIN INHALT ODER KEINE ZAHL</h1>";
		$meinPreis = "nix";
	}else{
		echo "<h1>Der ELSE-Fall</h1>";
		$meinPreis = $_POST["preisfeld"];
	}
	*/

	$ergebnis = $db->SelectAusDB($conn, $meinPreis);
	
	
	// Baut aus den Inhalten der Variable $ergebnis eine userfreundliche Darstellung der Datensätze (z.B. als Tabelle);

	if(count($ergebnis) > 0){
		$heads = $ergebnis[0];
		echo "<table border=1>";
		echo "<tr>";
		foreach($heads as $a => $b){
			echo "<th>$a</th>";
		}
		echo "</tr>";
		foreach($ergebnis as $key => $value){
			echo "<tr>";
			foreach($value as $a => $b){
				echo "<td style='text-align:center'>$b</th>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}else{
		echo "<h1>Die Suche lieferte keinen Treffer.</h1>";
	}

?>