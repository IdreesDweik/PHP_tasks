<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $string = "The quick brown fox jumps over the lazy dog <br>";

        echo strtoupper($string);
        echo strtolower($string);
        echo ucwords($string);
        echo ucfirst($string);

    ?>
    
</body>
</html>