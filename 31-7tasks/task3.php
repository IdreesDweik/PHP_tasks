<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $string = 'I am a full stack developer at orange coding academy';

        if (str_contains ($string, 'orange')) {
             echo "Word Found!";
            }
            else {
                echo "Word not Found";
                }
    ?>

</body>
</html>