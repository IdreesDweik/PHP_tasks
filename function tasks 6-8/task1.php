<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php

            $n = 3;

            function isPrime($number){
                for ($i = 2; $i <= sqrt($number); $i++){ 
                    if ($number % $i == 0) 
                        echo "$number is not a prime number "; 
                }
                echo "$number is a prime number";
            }
            isPrime($n);
        ?>

</body>
</html>