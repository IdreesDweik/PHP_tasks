<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $n = 30;
        $i = 0;
        $total = 0;

        while($i <= $n) {
          $total += $i;
          $i++;
        }

        echo "Total as a $total";

    ?>

</body>
</html>