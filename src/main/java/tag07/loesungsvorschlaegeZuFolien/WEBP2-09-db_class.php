<?php
	class DB {
		private $connection;
		
		public function __construct(){
			$dateiname = "WEBP2-09-db_zugang.php";
			if(file_exists($dateiname)){
				require_once($dateiname);
				try{
					$this->connection = new PDO("mysql:host=$dbhost;dbname=$dbname; charset=utf8", $dbuser, $dbpass);
				} catch (PDOException $e){
					echo "<b>Im Konstruktor ist ein Fehler aufgetreten. Inhalt: " . $e;
				}
			} else{
				echo "<h3>Die Datei $dateiname existiert nicht.</h3>";
			}
		}

		public function GetConnection(){
			return $this->connection;
		}

		public function ZeigeDBs($conn){
			$sql = "SHOW TABLES";
			$erg = $conn->query($sql);
			
			return $erg->fetchall(PDO::FETCH_COLUMN);
		}

		public function SelectAusDB($conn, $meinPreis){
			if($meinPreis != "nix"){
				$sql = "SELECT * FROM buch WHERE Preis = $meinPreis";
				$erg = $conn->query($sql);
			}else{
				$sql = "SELECT * FROM buch";
				$erg = $conn->query($sql);
			}
			try{
				return $erg->fetchall(PDO::FETCH_ASSOC);
			} catch (PDOException $e){
				return "Das war nix";
			}
		}
		
		
	}

?>