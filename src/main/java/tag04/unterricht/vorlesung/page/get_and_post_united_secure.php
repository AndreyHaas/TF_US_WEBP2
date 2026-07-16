<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
        echo "Vorname (POST): ". htmlspecialchars($firstname)."<br>";
        echo "Nachname (POST): ". htmlspecialchars($lastname)."<br>";
    }
    
    if(isset($_GET['ref'])){
        $ref = $_GET['ref'];
        echo "Referrer (GET): ". htmlspecialchars($ref)."<br>";
    }
?>  