<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $scores = [60,86,95,63,55,74,79,62,50];
        $average = array_sum($scores) / count($scores);
        
        if ($average <= 60){
            echo "Your score is F";
        } else if($average >= 61 && $average <= 70){
            echo "Your score is D";
        } else if($average >= 71 && $average <= 80){
            echo "Your score is C";
        } else if($average >= 81 && $average <= 90){
            echo "Your score is B";
        }else if($average >= 100){
            echo "Your score is A";
        }

    ?>

</body>
</html>