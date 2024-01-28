<?php
// Database connection details
$host = "localhost:3306";
$username = "root";
$password = "root";
$database = "Users";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>