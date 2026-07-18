<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Formulare</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			table { border: 1px solid red; border-collapse=collapse; }
			td, th { border: 1px solid green; border-collapse=collapse; }
		</style>
	</head>
	<body>
	<?php
		echo "<h1>Ihre Bewerbung ist bei uns eingegangen und wird schnellstmöglich bearbeitet.</h1>";
		echo "<h2>Vielen Dank für Ihr Vertrauen.</h2>";
		echo "<h2>Rufen Sie uns nicht an. Wir rufen Sie an.</h2>";

		if (isset($_POST) && !(empty($_POST))) {
			echo "<table>";
			echo "<tr><th colspan=2>Werte aus POST</th></tr>";
			echo "<tr><th>Parameter</th><th>Wert</th></tr>";
			foreach ($_POST as $param_name => $param_val) {
				if(is_array($param_val)){
					echo "<tr><td>$param_name</td><td>ARRAY!!</td></tr>";
					foreach ($param_val as $key => $value) {
						echo "<tr><td></td><td>$key</td><td>$value</td></tr>";
					}
				} else{
					echo "<tr><td>$param_name</td><td>$param_val</td></tr>";
				}
			}
			echo "</table>";
		}
	?>
	</body>
</html>