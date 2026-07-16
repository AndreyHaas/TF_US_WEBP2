 <?php
echo (!isset($_SESSION['BackGround']) || $_SESSION['BackGround'] === 'white')
? "<body>"
: "<body style='background-color: ".htmlspecialchars($_SESSION['BackGround']).";'>";
 ?>