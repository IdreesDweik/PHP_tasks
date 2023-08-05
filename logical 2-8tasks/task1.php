<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        $year = 2013;
        if ($year % 400 == 0) {
           echo $year." is a leap year.";
        } elseif ($year % 100 == 0) {
           echo $year." is not a leap year.";
        } elseif ($year % 4 == 0) {
           echo $year." is a leap year.";
        } else {
           echo $year." is not a leap year.";
        }

    ?>

</body>
</html>