<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $colors = array("red","blue", "white","yellow");
        $colors = array_flip($colors);
        $colors = array_change_key_case($colors, CASE_UPPER);
        $colors = array_flip($colors);

        foreach ($colors as $x){
            echo "<pre>";
            print_r($x);
            echo "<pre>";
        }

    ?>

</body>
</html>