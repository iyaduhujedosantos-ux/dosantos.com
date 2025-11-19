<?php
// Database settings
$host = "localhost";     // Database server
$user = "root";          // Database username
$pass = "";              // Database password
$dbname = "dosantos";    // Database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Optional: Set UTF-8 encoding (recommended)
$conn->set_charset("utf8");

?>
