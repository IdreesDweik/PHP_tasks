<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $firstInteger = 1;
        $secondInteger = 5;
        $therdInteger = 9;

        switch (true){
            case ($firstInteger > $secondInteger && $firstInteger > $therdInteger):
                print $firstInteger;
                break;

            case ($secondInteger > $firstInteger && $secondInteger > $therdInteger):
                print $secondInteger;
                break;

            default:
                print $therdInteger;
        }

    ?>

</body>
</html>