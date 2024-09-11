<?php
session_start();

// Database connection
$servername = "localhost";
$dbusername = "root";  // Change this to your database username
$dbpassword = "";  // Change this to your database password
$dbname = "farmer";  // Your database name

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if username or email already exists
    $checkUser = $conn->query("SELECT id FROM register WHERE username='$username' OR email='$email'");
    if ($checkUser->num_rows > 0) {
        echo "Username or email already exists!";
    } else {
        // Insert new user
        $sql = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
            header("Location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
