<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $colors = array("RED","BLUE", "WHITE","YELLOW");
        $colors = array_flip($colors);
        $colors = array_change_key_case($colors, CASE_LOWER);
        $colors = array_flip($colors);

        foreach ($colors as $x){
            echo "<pre>";
            print_r($x);
            echo "<pre>";
        }

    ?>

</body>
</html>