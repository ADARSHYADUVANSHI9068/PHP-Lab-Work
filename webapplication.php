<?php
// Replace these values with your actual stored credentials
$storedUsername = "example_user";
$storedPassword = "example_password";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    // Verify credentials
    if ($inputUsername === $storedUsername && $inputPassword === $storedPassword) {
        echo "Login successful";
    } else {
        echo "Invalid credentials";
    }
}
?>