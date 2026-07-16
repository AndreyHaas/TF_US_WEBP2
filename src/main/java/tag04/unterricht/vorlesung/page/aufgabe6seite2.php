<?php
session_start();

// Arrays anlegen
$color[] = array('#ea899a','#ff0000');
$color[] = array('#00ff00');
$numbers[] = array
(
    'POS0' => '0',
    'POS1' => '1'
);

for($i = 0; $i < count($color); $i++)
{
    for($x = 0; $x < count($color[$i]); $x++)
    {
        $color[$i][$x];
    }

}

function resolveString($string){
    return explode("_",$string);
}

function BackGround($number, $color){
    $position = resolveString($_POST['color']);
    return $_SESSION['BackGround'] = $color[$position[0]][$position[1]];
}

BackGround($numbers,$color);

$_SESSION['AbsatzFarbe'] = 'white';

require_once('../function/function_head.php');
require_once('../function/function_body_start.php');

?>
    <p>
        Ich bin Seite 2 der Webseite mit den auf Seite 1 geänderten Hintergrund.<br>
        Die SESSION wurde erweitert, die Änderung sieht man auch hier erst auf der nächsten Seite 3.
        <br><a href="aufgabe6seite3.php">zur dritten Seite</a>
    </p>
<?php
require_once('../function/function_body_end.php');
?>
