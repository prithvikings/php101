<?php
session_start();

$servername = "localhost:3309"; // or 127.0.0.1
$username = "root";        // MySQL username (default is root)
$password = "";            // MySQL password (empty by default in XAMPP)
$dbname = "votingsystem"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
