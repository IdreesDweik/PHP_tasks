<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        $firstInteger = 2;
        $secondInteger = 2;
        

        function test($x, $y) {
            if ($x == $y){
            echo '(2 + 2) * 3 = ';
            echo ($x + $y) * 3;
            } else {
               echo '$x + $y = ';
               echo $x+$y ;
            }
        }

        test($firstInteger, $secondInteger);  

    ?>

</body>
</html>