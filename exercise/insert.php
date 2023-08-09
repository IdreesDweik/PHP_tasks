<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => test
    $conn = mysqli_connect("localhost", "root", "", "test");

    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 3 values from the form data(input)
    $first_name =  $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO college (firstname , lastname , email)  VALUES ('$first_name',
     '$last_name','$email')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$first_name\n $last_name\n "
            . "$email");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>
</body>

</html>