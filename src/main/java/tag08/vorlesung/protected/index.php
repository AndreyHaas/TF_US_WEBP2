<?php

class Animal
{
    protected $species;
    protected $text;
    protected $laut;

    public function __construct($text,$species,$laut)
    {
        $this->text = $text;
        $this->species = $species;
        $this->laut = $laut;
    }

    public function showSpecies()
    {
        return "Dieses Tier ist ". $this->text." ".$this->species.".";
    }
}

class Dog extends Animal
{
    public function bay()
    {
        return ucfirst($this->text." ".$this->species." macht ".$this->laut);
    }
}

$myAnimal = new Dog("ein","Hund","wau wau");
echo $myAnimal->showSpecies();
echo "<br>";
echo $myAnimal->bay();
echo "<br>";echo "<br>";
$myAnimal = new Dog("eine","Schlange","zisch");
echo $myAnimal->showSpecies();
echo "<br>";
echo $myAnimal->bay();
?>
