<?php
interface iTemplate
{
    public function setVariable($name,$var);
    public function getHTML();
}

class Cats implements iTemplate
{
    public $template;

    public function __construct($template)
    {
        $this->template = $template;
    } 

    public function setVariable($name,$var)
    {
        $this->template = str_replace('{'.$name.'}',$var,$this->template);
    }

    public function getHTML()
    {
        return $this->template;
    }   
}

class Dogs implements iTemplate
{
    public $template1;

    public function __construct($template1)
    {
        $this->template1 = $template1;
    } 

    public function setVariable($name1,$var1)
    {
        $this->template1 = str_replace('{'.$name1.'}',$var1,$this->template1);
    }

    public function getHTML()
    {
        return $this->template1;
    }   
}
$template = new Cats("<h2>{title}</h2><p>{content}</p>");
$template->setVariable("title","Katzen");
$template->setVariable("content","machen miau");
$template1 = new Dogs("<h2>{title}</h2><p>{content}</p>");
$template1->setVariable("title","ABER");
$template1->setVariable("content","Hunde machen wau wau");

?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>...</title>
    </head>
    <body>
        <?php 
            echo $template->getHTML();
        ?>
        <hr>
        <?php 
            echo $template1->getHTML();
        ?>
    </body>
</html>