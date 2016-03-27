<?php

/**
 *
 * @author: Christy
 *
 */

$username = "guest"; // user must have priveleges to create DB
$password = "guest";

$conn = mysqli_connect("localhost", $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

// Create database
$create = "CREATE DATABASE DarkHorse";
if ($conn -> query($create) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn -> error . "\n";
}

mysqli_query($conn, "CREATE TABLE User(id INTEGER PRIMARY KEY, email VARCHAR(320), password VARCHAR(20)");
mysqli_query($conn, "CREATE TABLE Image(title VARCHAR(30) PRIMARY KEY, user_id VARCHAR(30), caption VARCHAR(50), upload_time DATETIME, rating TINYINT");

$conn->close();

?>