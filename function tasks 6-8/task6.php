<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php

            function isArmstrong($num) {
                $sum = 0;
                $temp = $num;
                while ($temp > 0) {
                    $x = $temp % 10;
                    $sum = $sum + pow($x, 3);
                    $temp = $temp / 10;
                }
                if ($num == $sum) {
                    echo "$num is Armstrong Number ";
                } else {
                    echo "$num is not Armstrong Number ";
                }
            }
            isArmstrong(407);

        ?>

</body>
</html>