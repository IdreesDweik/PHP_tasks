<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php

        class array_sort{
            protected $_asort;

            function __construct(array $asort)
            {
                $this->_asort = $asort;
            }

            function sortedarr()
            {
                $sorted = $this->_asort;
                sort($sorted);
                return $sorted;
            }
        }
        $sortarray = new array_sort(array(11, -2, 4, 35, 0, 8, -9));
        print_r($sortarray->sortedarr());

        ?>

</body>
</html>