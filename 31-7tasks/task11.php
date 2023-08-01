<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method='POST'>
        <h2>Please input your letter:</h2>
        <input type="text" name="letter">
        <input type="submit" value="Submit letter">
    </form>

    <?php
        $cha = $_POST['letter'];
        $next_cha = ++$cha; 
        
        if (strlen($next_cha) > 1) {
            $next_cha = $next_cha[0];
        }
        echo $next_cha."\n";
    ?>

</body>
</html>