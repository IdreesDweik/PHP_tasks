<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        $units = 75;

        if ($units <= 50){
            $total = $units * 2.5;
            echo $total;
        } else if($units >= 51 && $units <= 150){
            $total = $units * 5;
            echo $total;
        } else if($units >= 151 && $units <= 250){
            $total = $units * 6.2;
            echo $total;
        } else if($units >= 251){
            $total = $units * 7.5;
            echo $total;
        }

    ?>

</body>
</html>