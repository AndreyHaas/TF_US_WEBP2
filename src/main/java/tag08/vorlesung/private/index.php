<?php

class Book
{
    private $title;
    private $autor;

    public function __construct($title,$autor)
    {
        $this->title = $title;
        $this->autor = $autor;
    }

    private function getTitle()
    {
        return $this->title;
    }

    private function getAutor()
    {
        return $this->autor;
    }

    public function showDetails()
    {
        echo "Titel: ".$this->getTitle()."<br>";
        echo "Titel: ".$this->getAutor()."<br>";
    }
}

$book = new Book("Das T","Maxi");
echo $book->showDetails();
?>
