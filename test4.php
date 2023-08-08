<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Perform a query
    $query = "SELECT * FROM user";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {   
        // Fetch and display data
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id"] . " - Name: " . $row["username"] . " - Password: " . $row["password"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "Query failed: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
    ?>
</body>

</html>