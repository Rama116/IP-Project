<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
} else {
    header('Location: cart.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .total-amount {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .qr-code {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment</h1>
        <p class="total-amount">Total Amount: ₹<?php echo htmlspecialchars($amount); ?></p>
        <div class="qr-code">
            <img id="qr-code-image" src="../assets/scanner.jpg" alt="Google Pay QR Code" height="500px" width="450px">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const amount = "<?php echo htmlspecialchars($amount); ?>";
            const upiUrl = `upi://pay?pa=ramagugan77@okaxis&pn=Rama&am=${$amount}&cu=INR`;
            const qrCodeImage = document.getElementById('qr-code-image');
            qrCodeImage.src = `https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=${encodeURIComponent(upiUrl)}`;
            console.log(qrCodeImage.src);
        });
    </script>
</body>
</html>
