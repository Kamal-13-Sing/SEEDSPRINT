<?php
// Do something with the form data (e.g., process, validate, store in a database)
$servername = "localhost";
$username = "root";
$password = "";
$database = "check";
// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "sita <br>";
}
?>