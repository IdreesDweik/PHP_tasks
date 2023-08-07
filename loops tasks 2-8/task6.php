<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        function fac($n){
          if ($n == 1)
            return $n;
          return $n * fac($n - 1);
        }
        echo "factorial of 5 :" . fac(5);

    ?>

</body>
</html>