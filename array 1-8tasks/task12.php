<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $words =  array("abcd","abc","de","hjjj","g","wer");
        $new_array = array_map('strlen', $words);
        echo "The shortest array length is " .min($new_array) .". The longest array length is " . max($new_array).'.';

    ?>

</body>
</html>