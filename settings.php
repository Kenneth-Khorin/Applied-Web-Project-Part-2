<?php
// Connect to database
$host = "localhost";
$user = "root";
$pass = ""; // default for XAMPP
$dbname = "project_2";

$conn = mysqli_connect("localhost", "root", "", "db_name");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>