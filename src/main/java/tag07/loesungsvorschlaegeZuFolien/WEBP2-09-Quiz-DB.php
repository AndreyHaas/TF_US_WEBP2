<?php
	// Vorneweg steht der Klassen-Name
	class DB {
		// Ein paar Attribute in der Klasse		
		private $connection;
		private $instance;

		// Der Konstruktor in PHP ist eine function mit dem Zusatz "__construct()"
		public function __construct(){
			$filename = "WEBP2-09-Quiz-Daten.php";
			if(file_exists($filename)){
			// An dieser Stelle wird "require_once" verwendet, da der Konstruktor häufiger aufgerufen werden könnte
			require_once($filename);
			} else {
				echo "Datei DB.class_data.php nicht gefunden.";
			}
			//Ein Try-Catch-Block zur Erstellung der DB-Connection			
			try {
				// Die klasseninterne Variable $connection erhält einen Wert
				// Der Wert: Ein Objekt, das aus der PDO-Klasse erzeugt wird
				$this->connection = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
			// Der Catch-Zweig fragt das $e aus der PDO-Exception ab. Die PDO-Klasse wirft eigene Exceptions			
			} catch (PDOException $e){
				echo "$e <br> Ein Fehler im Konstruktor ist aufgetreten";
			}
		}
		// Getter-Methode, um den connection-String aus der Klasse zu holen (private $connection)
		public function getConnection(){
			return $this->connection;
		}
		
		public function selectFragen($conn){
			$sql = "SELECT * FROM fragen";
			$ergebnis = $conn->query($sql);
			return $ergebnis->fetchall(PDO::FETCH_ASSOC);
		}

		public function insertFragen($conn, $fields="empty", $values="empty"){
			$sql = "INSERT INTO fragen ($fields[0], $fields[1], $fields[2], $fields[3], $fields[4], $fields[5])
					VALUES ($values[0], $values[1], $values[2], $values[3], $values[4], $values[5])";
			
			echo "<br><br>$sql<br><br>";
			
			$statement = $conn->prepare($sql);
			try{
				$erg = $statement->execute();
				if($erg){
					echo "Läuft<br>";
				} else {
					echo "Läuft nicht<br>";
				}
			} catch (PDOException $e) {
				echo "$e <br> Ein Fehler in insertFragen ist aufgetreten!";
			}
		}

	}
?>












