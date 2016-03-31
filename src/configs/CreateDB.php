<?php

/**
 * @author: Christy
 */
    $username = "guest"; // user must have privileges to create DB
    $password = "guest";

    $conn = mysqli_connect("localhost", $username, $password);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully\n";

// Create database
    $create = "CREATE DATABASE DarkHorse";
    if ($conn->query($create) === TRUE) {
        echo "Database created successfully\n";
    } else {
        echo "Error creating database: " . $conn->error . "\n";
    }

// Switch to databsae
    $conn->select_db('DarkHorse');


// Query for creating table Users
    $userTable = "CREATE TABLE Users (
  id INT(6) PRIMARY KEY,
  email VARCHAR(320),
  password VARCHAR(20
  ))";

//Query for creating table Images
    $imageTable = "CREATE TABLE Images (
  title VARCHAR(30) PRIMARY KEY,
  user_id VARCHAR(30),
  caption VARCHAR(50),
  upload_time DATETIME,
  rating TINYINT
  )";

// Print results :)
    if ($conn->query($userTable) === TRUE && $conn->query($imageTable) === TRUE) {
        echo "Tables created successfully :D\n";
    } else {
        echo "Error creating tables: " . $conn->error . "\n";
    }

    $conn->close();


?>