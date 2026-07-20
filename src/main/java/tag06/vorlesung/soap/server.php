<?php
class Buecherservice{
    public function getBuecher(){
        try{
            $pdo = new PDO(
                "mysqli:host=localhost;dbname=bibliothek;charset=utf8",
                "root",
                ""
            )

            $sql = "
                SELECT
                    buch.titel,
                    buch.isbn,
                    buch.erscheinungsjahr,
                    CONCAT(autor.vorname, ' ', autor.nachname) AS autor_name,
                    verlag.name AS verlag_name,
                    verlag.ort AS verlag_ort
                FROM buch
                INNER JOIN autor
                ON buch.autor_id = autor.autor_id
                INNER JOIN verlag
                ON buch.verlag_id = verlag.verlag_id
                ORDER BY buch.titel
            ";

            $stmt = $pdo -> query($sql);
            $daten = $stmt->fetchALL(PDO::FETCH_ASSOC);
            return json_encode($daten);

        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}
/*
WSDL bedeutet Web Services Description Language
*/
$server = new SoapServer("service.wsdl");
$server->setClass(Buecherservice);
$server->handle();


?>