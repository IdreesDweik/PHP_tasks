<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
        $average = array_sum($temperature) / count($temperature);
        asort($temperature);
        $lowest = array_slice($temperature, 0, 5);
        rsort($temperature);
        $highest  = array_slice($temperature, 0, 5);

        echo "Average Temperature is: $average <br>";
        echo "List of five lowest temperatures: ";
        foreach ($lowest as $x) {
            echo "$x, ";
        }
        echo "<br>";
        echo "List of five highest temperatures: ";
        foreach ($highest as $y) {
            echo "$y, ";
        }


    ?>

</body>
</html>