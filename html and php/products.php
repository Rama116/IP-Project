<?php
session_start();

// Example product array with image URLs
$products = [
    0 => [
        'name' => 'Almonds',
        'price' => 150,
        'quantity' => 1,
        'image' => '../assets/alm.webp'
    ],
    1 => [
        'name' => 'Cashews',
        'price' => 200,
        'quantity' => 1,
        'image' => '../assets/cashew.webp'
    ],
    // Add more products as needed
];

// Function to add a product to the cart
function addToCart($product) {
    $_SESSION['cart'][] = $product;
}

// Example of adding a product (this would be done via some form or button click in your application)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    // Ensure product ID is valid
    if (array_key_exists($productId, $products)) {
        $product = $products[$productId];
        addToCart($product);
    }
    // Redirect to avoid form resubmission
    header("Location: cart2.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Page</title>
</head>
<body>
    <h1>Products</h1>
    <form method="post" action="products.php">
        <label for="product_id">Select a product to add to cart:</label>
        <select name="product_id" id="product_id">
            <?php foreach ($products as $id => $product): ?>
                <option value="<?php echo $id; ?>"><?php echo htmlspecialchars($product['name']); ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Add to Cart</button>
    </form>
    <a href="cart2.php">View Cart</a>
</body>
</html>
