<?php
// Load environment variables from .env file
$env = parse_ini_file(__DIR__ . "/.env");

$servername = $env["DB_HOST"];
$username   = $env["DB_USER"];
$password   = $env["DB_PASS"];
$database   = $env["DB_NAME"];

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connection successful!";
}
?>
