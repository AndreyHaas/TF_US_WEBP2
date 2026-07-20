<?php

/*
    Zuweisung von Werten:
    $dsn = Informationen über die Datenbank
    $user = Benutzername
    $pass = Passwort
*/
$dsn = 'mysql:host=localhost;dbname=bibliothek;charset=utf8';
$user = 'root';
$pass  = '';

try{
    $pdo = new PDO($dsn,$user,$pass);

    /*
    PDO::ATTR_ERRMODE bedeutet: Ich möchte den Fehlermodus einstellen
    PDO::ERRMODE_EXCEPTION bedeutet: Bei einem Fehler soll eine Exception geworfen werden
    */
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Verbindung fehlgeschlagen: ".$e->getMessage());
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

$stmt = $pdo -> query($sql);

/*
    fetchALL liest alle Zeilen auf einmal aus
    FETCH_ASSOC bestimmt, wie die Daten zurückgegeben werden.
*/
$daten = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>