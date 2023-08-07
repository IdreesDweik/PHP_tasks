<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php

        function IsPalindrome($str) {
            if (strrev($str) == $str)
                echo "Yes it is a palindrome ";
            else
                echo "no it is not a palindrome ";
        }
        IsPalindrome("evacaniseebeesinacave");

        ?>

</body>
</html>