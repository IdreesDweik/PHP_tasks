<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $result = "";
        for ($i = 1; $i <= 5; $i++) {
          for ($j = 1; $j <= 5; $j++) {
            if ($j == $i)
              $result .= " $i ";
            else
              $result .= " 0 ";
          }
          $result .= "\n<br>";
        }
        echo $result;

    ?>

</body>
</html>