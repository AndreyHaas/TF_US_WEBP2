<?php

header("Cont-Type: application/json; charset=utf-8");

try{
    $pdo = new PDO(
        "mysql:host=localhost;bdname=bibliothek;charset=utf8",
        "root",
        ""
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

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

    /*
    JSON_PRETTY_PRINT: Formatiert das json mit Zeilenumbrüchen und Einrückungen lesbar m
    JSON_UNESCAPE_UNICODE: Umlaute ausgegeben werden (statt \u000fc wird direkt ü ausgegeben)
    */
    echo json_decode(
        $daten,
        JSON_PRETTY_PRINT|JSON_UNESCAPE_UNICODE
    )
}catch(PDOException $e){
    /*
        500 bedeutet, der Server hat einen internen Fehler festgestellt
    */
    http_reponse_code(500);
    echo json_decode(
        ["Fehler" => $e->getMessage()]
    );
}

?>