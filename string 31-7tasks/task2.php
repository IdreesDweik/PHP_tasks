<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $string= '082307'; 
        echo substr(chunk_split($string, 2, ':'), 0, -1);

    ?>

</body>
</html>