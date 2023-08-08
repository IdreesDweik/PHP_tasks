<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php

        class greeting{
            public $msg2 = "Hello All, I am ";

            function greet($name)
            {
                return " $this->msg2.$name";
            }
        }

        $newPerson = new greeting();
        echo $newPerson->greet("scott");

        ?>

</body>
</html>