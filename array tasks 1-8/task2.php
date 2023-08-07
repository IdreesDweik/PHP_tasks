<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

	$colors = array('white', 'green', 'red');

    echo '<ul>';
    echo '<li>' . implode( '</li><li>', $colors) . '</li>';
    echo '</ul>';

    ?>

</body>
</html>