<?php
session_start();

// Database connection details
$servername = "localhost";
$dbusername = "root"; // Change this to your database username
$dbpassword = ""; // Change this to your database password
$dbname = "farmer"; // Your database name

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password']; // Do not escape password as it will be hashed

    // Check if username or email exists
    $sql = "SELECT id, username, email, password FROM register WHERE username='$username' OR email='$username'";
    $result = $conn->query($sql);   

    if ($result->num_rows > 0) {
        // Fetch user data
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Password is correct, start a session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: farmer.php"); // Redirect to homepage or user dashboard
            exit;
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with the given username or email!";
    }
}

$conn->close();
?>
