<?php
session_start();

// Database connection
$dbHost = "mysql:host=localhost;dbname=website";
$dbUsername = "root";
$dbPassword = "changeme";
$dbName = "website";

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

        if (isset($_SESSION["user_id"])) {
            echo "Successful login";
        } else {
            echo "Access denied. Please login first.";
            // You can redirect the user to the login page here if needed
        }
        ?>