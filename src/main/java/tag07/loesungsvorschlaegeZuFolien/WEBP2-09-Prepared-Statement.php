<?php
	class DB{
		private $connection;
		
		public function __construct(){
			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "buecher";

			try {
				$this->connection = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
				echo "Das PDO-Objekt wurde erstellt!!!!<br><br>";
			} catch(PDOException $e){
				echo "$e <br> Ein Fehler beim Aufbau der DB-Verbindung ist aufgetreten!!!!<br>";
			}
		}

		public function PrepareAndExecute1($param){
			// Vorbereiten der Datenbank-Abfrage unter Verwendung von Parametern
			$statement = $this->connection->prepare("SELECT * FROM buch WHERE Titel LIKE ? AND Fachbereich = ? AND VerlagsNr = ?");

			// Aufbauen der Abfrage mit execute inklusive der Zuweisung von Werten zu den Parametern
			$statement->execute($param);

			// Ausführen der Abfrage
			return $statement->fetchall(PDO::FETCH_ASSOC);
		}

		public function PrepareAndExecute2($param){
			// Vorbereiten der Datenbank-Abfrage unter Verwendung von Parametern
			$statement = $this->connection->prepare("SELECT * FROM buch WHERE Titel LIKE :titel AND Fachbereich = :fach AND VerlagsNr = :verlag");

			// Aufbauen der Abfrage mit execute inklusive der Zuweisung von Werten zu den Parametern
			$statement->execute($param);

			// Ausführen der Abfrage
			return $statement->fetchall(PDO::FETCH_ASSOC);
		}
	}


// HIER IST DIE MAIN! ECHT MAL! EHRLICH!
	$db = new DB();

	// Aufruf der Methode mit Parametern für das Ersetzen der ?
	$param = array("Das%","Ph",31);
	$erg = $db->PrepareAndExecute1($param);
	Ausgabe($erg);

	// Aufruf der Methode mit Parametern für das Ersetzen der benannten Platzhalter
	$param = array(":titel"=>"Das%", ":fach"=>"Ph", ":verlag"=>31);
	$erg = $db->PrepareAndExecute2($param);
	Ausgabe($erg);


	function Ausgabe($erg){
		echo "<table border=1>";
		foreach($erg as $eintrag){
			echo"<tr>";
			foreach($eintrag as $key=>$value){
				echo "<th>$key</th>";
			}
			echo"</tr>";
			break;
		}
		
		foreach($erg as $eintrag){
			echo"<tr>";
			foreach($eintrag as $key=>$value){
				echo "<td>$value</td>";
			}
			echo"</tr>";
		}
		echo "</table><br>";
	}
?>


