<!DOCTYPE HTML>
<head>
  <meta charset="utf-8">
  <title>Aufgabe 4 vom 13.07.2026</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <h1>
    Legen Sie eine Variable mit Ihrem Geburtsjahr an und berechnen Sie Ihr Alter (z.Bsp. mit aktuellem Jahr 2026). Verwenden Sie die Mischform!
  </h1>
    <div class="divBackground">
      <?php
        $geburtsjahr = 2000;
        $aktuellejahr = 2026;
        $sum = $aktuellejahr - $geburtsjahr;
      ?>
      <p>
    	 Sie sind <?php echo $sum; ?> Jahre alt.
      </p>
    </div>
</body>
</html>

<!--
Quellenangabe:
https://www.w3schools.com/php/default.asp
https://www.php.net/
-->
