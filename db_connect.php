<?php
//Used to connect to the php server
$servername = "localhost";
$username = "marz"; // Use your MySQL username
$password = "12345"; // Use your MySQL password
$dbname = "marzdishes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
