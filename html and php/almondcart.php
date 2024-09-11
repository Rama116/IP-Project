<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Default XAMPP MySQL password
$dbname = "shopping_cart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $session_id = session_id();

    // Check if the product already exists in the cart
    $sql = "SELECT * FROM cart_items WHERE session_id = ? AND product_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $session_id, $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // If the product exists, update the quantity
        $sql = "UPDATE cart_items SET quantity = quantity + 1 WHERE session_id = ? AND product_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $session_id, $product_id);
        $stmt->execute();
    } else {
        // If the product does not exist, insert it into the cart
        $sql = "INSERT INTO cart_items (session_id, product_id, product_name, product_price, quantity) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$quantity=1;
$stmt->bind_param("sissd", $session_id, $product_id, $product_name, $product_price, $quantity);
$stmt->execute();
    }

    $stmt->close();
    $conn->close();

    header('Location: cart2.php');
    exit();
}
?>
    