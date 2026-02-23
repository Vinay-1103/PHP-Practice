<?php

function calculateGrade($total){
    if($total >= 250){ return "A";}
    elseif($total >= 200){
        return "B";
    }
    elseif($total >= 100){
        return "C";
    }
    else{
        return "Fail";
    }
}


$name = $_POST['name'];
$email = $_POST['email'];
$mark = $_POST['mark'];

$total=0;
foreach ($mark as $marks){
    $total+=$marks;
}

$grade = calculateGrade($total);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
</head>
<body>
    <h2>Student Details</h2>

    <p>Name:<?php echo $name ?></p>
    <p>email:<?php echo $email ?></p>

    <h2>Marks</h2>
    <ol>
        <?php
        foreach($mark as $marks){
            echo "<li>$marks</li>";
        }
        ?>
    </ol>

    <p><strong>Total:</strong> <?php echo $total; ?></p>
    <p><strong>Grade:</strong> <?php echo $grade; ?></p>
</body>
</html>