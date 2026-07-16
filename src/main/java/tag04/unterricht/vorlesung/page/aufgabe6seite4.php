<?php
    session_start();        
    $_SESSION = [];         // Session-Array leeren
    session_destroy();      // Session auf dem Server löschen 
    require_once('../function/function_head.php');
    require_once('../function/function_body_start.php');
?>
    Ich bin Seite 4 der Webseite und der Hintergrund ist identisch der Startseite.
<?php
    require_once('../function/function_body_end.php');
?>
