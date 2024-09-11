<?php
session_start();
$session_id = session_id();

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

// Fetch cart items
$sql = "SELECT * FROM cart_items WHERE session_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $session_id);
$stmt->execute();
$result = $stmt->get_result();
$cart = $result->fetch_all(MYSQLI_ASSOC);

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="../css/cartc.css">
</head>
<body>
    <div class="container">
        <h1>Your Shopping Cart</h1>
        <?php if (empty($cart)): ?>
            <p>Your cart is empty.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($cart as $item): ?>
                    <li class="cart-item">
                        <img src="../assets/cashewnuts.webp<?php echo htmlspecialchars($item['product_id']); ?>.webp" alt="Product Image">
                        <div class="cart-details">
                            <p><?php echo htmlspecialchars($item['product_name']); ?></p>
                            <p>Price: ₹<?php echo htmlspecialchars($item['product_price']); ?></p>
                            <p>Quantity: <?php echo htmlspecialchars($item['quantity']); ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="cart-total">
                <?php
                    $total = 0;
                    foreach ($cart as $item) {
                        $total += $item['product_price'] * $item['quantity'];
                    }
                ?>
                Total: ₹<?php echo $total; ?>
            </div>
            <a class="checkout-button" href="main1.php">Proceed to Checkout</a>
        <?php endif; ?>
    </div>
</body>
</html>
