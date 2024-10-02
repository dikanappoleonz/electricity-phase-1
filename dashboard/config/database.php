<?php
// Connect to MariaDB
$servername = "localhost";
$username = "root";
$password = "989989";
$database = "db_dika";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>