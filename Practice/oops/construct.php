<?php
class Students{
    public $name;
    public $marks;

    public function __construct($name,$marks)
    {
       $this->name=$name;
        $this->marks=$marks;
    }

    public function display(){
        echo "my name is ".$this->name. "<br>";
        echo $this->marks;
    }

}

$student = new Students("Vinay",94);
$student->display();




?>