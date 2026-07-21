<?php
	session_start();
	
	require_once "WEBP2-09-Quiz-DB.php";

	$db = new DB();

	$conn = $db->getConnection();

	if(isset($_POST["antwort"]) AND !(empty($_POST["antwort"]))){
//		echo "<h1>" . $_POST["antwort"] . "</h1>";
//		echo "<h1>" . $_SESSION["Richtig"] . "</h1>";
		echo "<h1>Und die Antwort iiiiist ... ";
		if($_POST["antwort"] == $_SESSION["Richtig"]){
			echo "KORREKT!</h1>";
		}else{
			echo "LEIDER TOTAL FALSCH!</h1>";
		}		
		echo "<br>";
	}
	
	// Methodenaufruf mit Rückgabewert, der in $ergebnis gespeichert wird.
	$ergebnis = $db->selectFragen($conn);

	$aussen = 0;
	$innen = 0;

//	$meineFragen = array();
//	for($index = 0; $index < count($ergebnis); $index++){
//		$meineFragen[$index] = array();
//	}

	// Ausgabe des Ergebnisses über key-value-Paare	
	foreach($ergebnis as $key => $value){
		foreach($value as $a => $b){
			$meineFragen[$aussen][$innen] = $b;
			echo $aussen . " | " . $innen . " |" . $a . ":" . $meineFragen[$aussen][$innen] . "<br>";
			$innen++;
		}
//		echo "<br>";
		$aussen++;
		$innen = 0;
	}
	echo "<br>";
	echo "<br>";
	$zufall = rand(0, count($ergebnis)-1);
	$_SESSION["Richtig"] = $meineFragen[$zufall][6];

	
/*	
	$fields = array();
	$values = array();

//	$fields[] = "ID";  $values[] = "";

	$fields[] = "frage"; $values[] = "'Was ist die Antwort auf die Frage nach dem Sinn des Lebens?'";
	$fields[] = "antwort1"; $values[] = "'15'";
	$fields[] = "antwort2"; $values[] = "'96'";
	$fields[] = "antwort3"; $values[] = "'7'";
	$fields[] = "antwort4"; $values[] = "'42'";
	$fields[] = "richtig"; $values[] = "4";

	$db->insertFragen($conn, $fields, $values);
*/
?>

<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Das Quiz</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
		<p></p>
		<form id="formular" action="WEBP2-09-Quiz-Main.php" method="post">
			<label><?php echo $meineFragen[$zufall][1] ?></label><br><br>

			<input type="radio" id="a1" name="antwort" value="1">
			<label for="a1"><?php echo $meineFragen[$zufall][2] ?></label><br>

			<input type="radio" id="a2" name="antwort" value="2">
			<label for="a2"><?php echo $meineFragen[$zufall][3] ?></label><br>

			<input type="radio" id="a3" name="antwort" value="3">
			<label for="a3"><?php echo $meineFragen[$zufall][4] ?></label><br>

			<input type="radio" id="a4" name="antwort" value="4">
			<label for="a4"><?php echo $meineFragen[$zufall][5] ?></label><br>

			<input type="submit" id="a5" name="absenden">

		</form>
	</body>
</html>
