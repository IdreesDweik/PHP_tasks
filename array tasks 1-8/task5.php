<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $original = array( '1 ', '2 ', '3 ', '4 ', '5 ' );
        $inserted = array( '$ ' );

        array_splice( $original, 3, 0, $inserted );

        foreach ($original as $x) {
                echo "$x";
        }

    ?>

</body>
</html>