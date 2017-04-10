<?php 
// Connect to database

$dbservername = "localhost";
$dbname = "DB_NAME";
$dbusername = "DB_USER";
$dbpassword = "DB_PASS";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>