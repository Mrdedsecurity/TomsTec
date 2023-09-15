<?php
session_start();

// Database connection
$dbHost = "your_host";
$dbUsername = "your_username";
$dbPassword = "your_password";
$dbName = "your_database";

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Include the SQL query for user authentication
    include("auth_query.php");

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user_id"] = $
