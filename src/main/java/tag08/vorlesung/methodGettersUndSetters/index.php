<?php

class User
{
    public $name;
    public $email;

    public function __construct($name,$email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    //GETTER
    public function getName()
    {
        return $this->name;
    }

    //SETTER
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function sendEmail($betreff,$nachricht)
    {
        return "Email gesendet an: ".$this->email."<br>
        Betreff: ".$betreff."<br>
        Nachricht: ".$nachricht."<br>";
                
    }
}
$user = new User("Max Mustermann","max.mustermann@example.com");
echo $user->getName()."<br>";
echo "<hr>";
echo $user->sendEmail("Willkommen","Herzlich Willkommen");
?>
