<?php

require("connect.php");

$username = $_POST["username"];
$useremail = $_POST["useremail"];



$query = "INSERT INTO users (username,email) VALUES ('$username', '$useremail')";
$sql = $conn->query($query);

if($sql){
    header("Location: index.php");
}

$conn->close();