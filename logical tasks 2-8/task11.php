<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        $number = -60;
        if ($number > 0) {
            echo $number . " is a positive number";
        } else if ($number < 0) {
            echo $number . " is a negative number ";
        } else if ($number == 0) {
            echo "You have entered zero";
        } else {
            echo " please enter a numeric value";
        }

    ?>

</body>
</html>