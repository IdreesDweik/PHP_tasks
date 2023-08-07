<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $result = '';
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5 - $i; $j++) {
                $result .= " " . chr(65) . " ";
            }
            for ($j = 0; $j < $i; $j++) {
                $result .= " " . chr(65 + $i) . " ";
            }
            $result .= "<br>";
        }
        echo $result;

    ?>

</body>
</html>