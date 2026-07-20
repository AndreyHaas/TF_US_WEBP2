<?php

try{

    $client = new SoapClient(
        "http://localhost/webp2FuerTeilnehmer1/tag6/SOAP/service.wsdl"; //Wird vom Programm genutzt, um mit Webservices zu kommunizieren
    );
    $ergebnis = $client->getBuecher();
    $daten = json_decode($ergebnis,true);
    echo"<pre>";
    print_r($daten);
    echo"</pre>";

}catch(SoapFault $e){
    die("SOAP-Fehler: ".$e->getMessage());
}

?>
