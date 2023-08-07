<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php

            $x = 10;
            $y = 5 ;

            function swap (&$x , &$y){
                $temp = $x;
                $x = $y;
                $y = $temp;
            }
            echo "x = $x | y = $y";
            echo "<br>";
            swap( $x, $y );
            echo "x = $x | y = $y";

        ?>

</body>
</html>