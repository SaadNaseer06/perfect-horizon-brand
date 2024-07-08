<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "perfect-horizon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Ensure no output from connection file
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
