<?php
class MiniProject
{
    private $name;
    private $marks;

    public function __construct($name, $marks)
    {
        $this->name = $name;
        $this->marks = $marks;
    }

    public function TotalMarks()
    {
        return array_sum($this->marks);
    }
    public function CalculateGrade()
    {
        $total = $this->TotalMarks();
        if ($total >= 250) return "A";
        elseif ($total >= 200) return "B";
        elseif ($total >= 150) return "C";
        else return "Fail";
    }
    public function display(){
        echo "Name: " . $this->name . "<br>";
        echo "Total: " . $this->TotalMarks() . "<br>";
        echo "Grade: " . $this->calculateGrade();
    }
}

$student = new MiniProject("Vinay",[90,90,90]);
$student->display();
?>
