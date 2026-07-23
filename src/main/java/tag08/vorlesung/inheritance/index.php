<?php

class Vehicle
{
    public $marke;

    public function __construct($marke)
    {
        $this->marke = $marke;
    }

    public function drive()
    {
        echo "Alle Fahrzeuge fahren.";
    }
}

class Car extends Vehicle
{
    public $modell;

    public function __construct($marke,$modell)
    {
        parent::__construct($marke);
        $this->modell = $modell;
    }

    public function showBrandModel()
    {
        echo "<table><tr><td>Marke </td><td>".$this->marke."</td></tr>";
        echo "<tr><td>Modell </td><td>".$this->modell."</td></tr></table>";
    }

    public function drive()
    {
        echo "Dieses Modell ".$this->modell." hat fünf Türen.";
    }
}

$myCar = new Car("BMW","XS");
echo $myCar->showBrandModel();
echo $myCar->drive();
echo "<br><br>";
$myCar = new Vehicle("BMW");
echo $myCar->drive();
?>