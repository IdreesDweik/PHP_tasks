<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        function fib($n){
            $x = 0;
            $y = 1;
            echo $x . " , ";
            echo $y . " , ";
        
            for ($i = 0; $i < $n; $i++) {
                $temp = $x;
                $x = $y;
                $y += $temp;
                echo $y;
                if ($i !== $n - 1)
                    echo " , ";
            }
        }
        fib(15);

    ?>

</body>
</html>