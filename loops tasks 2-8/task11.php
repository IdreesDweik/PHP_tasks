<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        function floyedTriangle($n) {
          $num = 1;
          for ($i = 1; $i <= $n; $i++) {
            for ($j = 0; $j < $i; $j++) {
              echo $num++ . " ";
            }
            echo '<br>';
          }
        }
        floyedTriangle(5);

    ?>

</body>
</html>