<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $result = ' ';
        $n = 9;
        $spaces = "&#160&#160";
        for ($i = 1; $i <= 9; $i++) {
          $cond1fr = ceil($n / 2) - $i;
          $cond2 = $i;
          if ($i >= 5) {
            $cond1fr = $i - ceil($n / 2);
            $cond2 = 10 - $i;
          }
          for ($j = 0; $j < $cond1fr; $j++) {
            $result .= $spaces;
          }
          for ($j = 0; $j < $cond2; $j++) {
            $result .= chr(65 + $j) . "&#160";
          }
          $result .= "<br>";
        }
        echo $result;

    ?>

</body>
</html>