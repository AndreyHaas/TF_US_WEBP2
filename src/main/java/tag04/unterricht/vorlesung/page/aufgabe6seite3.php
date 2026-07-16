<?php
session_start();

require_once('../function/function_head.php');
require_once('../function/function_body_start.php');

?>
    Ich bin Seite 3 der Webseite und habe immer noch den auf Seite 1 gewählten Hintergrund.<br>
    Zusätzlich auch noch die Farbe von Seite 2 für den Absatz.  :-)<br>
    <p style="background: <?php  echo $_SESSION['AbsatzFarbe'] ?>">
    .... und jetzt wollen wir die SESSION auf der nächsten Seite löschen<br>
    <a href="aufgabe6seite4.php">zur vierten Seite</a>
    </p> 
    </php>
<?php
require_once('../function/function_body_end.php');
?>
