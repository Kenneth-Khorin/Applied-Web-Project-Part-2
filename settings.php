<?php
// Connect to database
$host = "localhost";
$user = "root";
$pass = ""; // default for XAMPP
$dbname = "project_2";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}