<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $alphabet = range('a', 'z');
        foreach ($alphabet as $letter) {
            echo $letter . " ";
          }

    ?>

</body>
</html>