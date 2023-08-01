<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $string1 = 'dragonball';
        $string2 = 'dragonboll';
        $str_pos = strspn($string1 ^ $string2, "\0");
        printf('First difference between two strings at position %d: "%s" vs "%s"',
        $str_pos, $string1[$str_pos], $string2[$str_pos]);
        printf("\n");

    ?>

</body>
</html>