<?php
// This file is used to connect to the Database
// Set to plain text for DEBUGGING
header('Content-type: text/plain');
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "user_information";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

// Create database if does not exist
$sql = "CREATE DATABASE IF NOT EXISTS user_information";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "\nError creating database: " . $conn->error;
}
$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
// Create tables if not exist
$sql = "CREATE TABLE IF NOT EXISTS information (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname TEXT NOT NULL,
lastname TEXT NOT NULL,
email TEXT NOT NULL UNIQUE,
password TEXT NOT NULL,
address TEXT,
number TEXT
)";
if ($conn->query($sql) === TRUE) {
    echo "\nTable created successfully";
} else {
    echo "\nError creating database: " . $conn->error;
}
echo "\nEND";
