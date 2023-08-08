<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php


        $startDate = new DateTime("1981-11-03");
        $endDate = new DateTime("2013-09-04");
        $timePassed = $startDate->diff($endDate);
        echo "Difference : " . $timePassed->y . " years, " . $timePassed->m . " months, " . $timePassed->d . " days ";

        ?>

</body>
</html>