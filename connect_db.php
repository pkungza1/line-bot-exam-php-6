<?php
$servername = "localhost";
$username = "id6206174_root";
$password = "4ko6r'LN";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>