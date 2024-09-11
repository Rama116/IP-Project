<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password (optional but recommended for security)
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $checkUser = $conn->query("Select '$username' from register where password= '$password'");
    // $checkUser = $conn->query("SELECT id FROM register WHERE username='$username' OR email='$email'");
    // $stmt->bind_param("ss", $username, $password);
    if ($checkUser->num_rows > 0) {
        header("location:farmer.php");
        }
        else{
            echo "<script>alert('Please Register or check your account credentials') </script>";
            // sleep();
            header("location:login.php");

    
    }
    // Execute the statement
    // if ($stmt->execute()) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $stmt->error;
    // }

    // Close the statement
    // $stmt->close();
}

// Close the connection
$conn->close();
?>
