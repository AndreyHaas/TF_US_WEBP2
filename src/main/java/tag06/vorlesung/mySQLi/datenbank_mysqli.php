<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'bibliothek';

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    die("Verbindung fehlgeschlagen: ".$conn->connect_error);
}

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

/*
    $result steht für mysqli_result-Objekt
*/
$result = $conn->query($sql);

?>