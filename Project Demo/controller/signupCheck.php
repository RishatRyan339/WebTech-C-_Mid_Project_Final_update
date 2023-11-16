<?php
session_start();
include('../model/userModel.php');
 
$con = getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted using POST

    // Retrieve user input from the form
    $username = $_POST["Name"];
    $password = $_POST["Password"];
    $email = $_POST["Email"];
    $user_type = $_POST['User_type'];

    // Validate the input (e.g., check for empty fields, validate email format, etc.)

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Construct an SQL INSERT query
    $sql = "INSERT INTO user_type (Name, Password, Email, User_type) VALUES ('$username', '$password', '$email', '$user_type')";

    if ($con->query($sql) === TRUE) {
        header('location: ../view/login.php');
    } else {
        echo "Error: " . $con->error;
    }

    // Close the database connection
    $con->close();
}



