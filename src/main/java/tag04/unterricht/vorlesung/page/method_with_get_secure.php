<?php
echo "Ein Beispiel, wie Sicherheitrisiken minimiert werden können:";
echo "<pre>";
print_r($_GET);
echo "</pre>";

$error = false;
if(empty($_GET['firstname'])){
    echo "<br>";
    echo htmlspecialchars("Sie müssen Ihren Vornamen angeben.");
    $error = true;
}
if(empty($_GET['lastname'])){
    echo "<br>";
    echo htmlspecialchars("Sie müssen Ihren Nachnamen angeben.");
    $error = true;
}

$pattern = "/ba(na){2}/i";
// /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/ Email Prüfung
// https://www.w3schools.com/js/js_regexp.asp
// Suchbegriff: Regular Expression

if(!empty($_GET['firstname'])){
    if(!preg_match($pattern, $_GET['firstname'])){
        echo "<br>";
        echo htmlspecialchars("Zugang kann nicht genehmigt werden.");
        $error = true;
    }else{
        echo "<br>";
        echo htmlspecialchars("Zugang genehmigt.");
    }
}

if(!$error){
    echo "<br>";
    echo htmlspecialchars("Alles ok, nun können weitere Anweisungen folgen.");
}

?>  