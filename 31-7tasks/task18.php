<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $string = '2,543.12';
        $number = str_replace( ',', '', $string);
        if( is_numeric($number)){
            echo $number."\n";
        }
        
    ?>

</body>
</html>