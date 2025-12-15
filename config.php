<?php
// Database Configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "research_tool";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection error: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");