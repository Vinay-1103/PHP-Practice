<?php
class Student{
    public $name ;
    public $marks;

    public function display(){
        echo $this->name;
    }
}

    $student = new Student();
    $student->name="Vinay";
    $student->display(); 
?>