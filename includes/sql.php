<?php
// This file is used to connect to the Database
// Set to plain text for DEBUGGING
//header('Content-type: text/plain');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_information";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if does not exist
$sql = "CREATE DATABASE IF NOT EXISTS user_information";
if ($conn->query($sql) === TRUE) {
} else {
    echo "<br>Error creating database: " . $conn->error;
}
$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
// Create tables if not exist
$sql = "CREATE TABLE IF NOT EXISTS information (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(255) NOT NULL UNIQUE,
firstname VARCHAR(255) NOT NULL,
lastname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL,
address VARCHAR(255),
contact_number VARCHAR(255)
)";
if ($conn->query($sql) === TRUE) {
} else {
    echo "<br>Error creating database: " . $conn->error;
}
