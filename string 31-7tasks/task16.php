<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $string = '\"\1+2/3*2:2-3/4*3';
        $new_string = preg_replace('/[^a-zA-Z0-9 ]/m', ' ', $string);
        echo $new_string;
        
    ?>

</body>
</html>