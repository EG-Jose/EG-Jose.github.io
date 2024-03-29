<?php
session_start();

$mysqli = require __DIR__ . "/database.php";

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cart_items = [];
    foreach ($_SESSION['cart'] as $cart_item) {
        $item_id = $cart_item['id'];
        $item_type = $cart_item['type'];

        $table_name = ($item_type === 'mens') ? 'mens' : 'womens';

        $sql = "SELECT * FROM `$table_name` WHERE `id` = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $item_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $cart_items[] = $result->fetch_assoc();
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['checkout'])) {
        $house_number = $_POST['house_number'];
        $barangay = $_POST['barangay'];
        $town_city = $_POST['town_city'];
        $province = $_POST['province'];
        $postal_code = $_POST['postal_code'];
        $payment_method = $_POST['payment_method'];

        if (empty($house_number) || empty($barangay) || empty($town_city) || empty($province) || empty($postal_code)) {
            echo 'Error: All address fields are required.';
            exit();
        }

        $shipping_address = $house_number . ', ' . $barangay . ', ' . $town_city . ', ' . $province . ', ' . $postal_code;

        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        $order_status = 'pending';
        $sql = "INSERT INTO orders (user_id, shipping_address, payment_method, order_status) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("isss", $user_id, $shipping_address, $payment_method, $order_status);

        if ($stmt->execute()) {
            unset($_SESSION['cart']);
            
            $order_id = $stmt->insert_id;

            function generateTrackingNumber() {
                $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $tracking_length = 10;
                $tracking_number = '';
        
                for ($i = 0; $i < $tracking_length; $i++) {
                    $index = rand(0, strlen($characters) - 1);
                    $tracking_number .= $characters[$index];
                }
        
                return $tracking_number;
            }
        
            $tracking_number = generateTrackingNumber();

            header("Location: order_confirmation.php?order_id=$order_id&tracking_number=$tracking_number");
            exit();
        } else {
            echo 'Error: Failed to place order. Please try again.';
        }

        $stmt->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Checkout</title>

    <link rel="stylesheet" type="text/css" href="css/main1.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script src="https://kit.fontawesome.com/b9d5bac5fa.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <?php foreach ($cart_items as $item): ?>
        <div>
            <h2><?php echo htmlspecialchars($item["item_name"]); ?></h2>
            <p>Price: $<?php echo htmlspecialchars($item["item_price"]); ?></p>
        </div>
    <?php endforeach; ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="house_number">House Number:</label>
        <input type="text" id="house_number" name="house_number" required><br>

        <label for="barangay">Barangay:</label>
        <input type="text" id="barangay" name="barangay" required><br>

        <label for="town_city">Town/City:</label>
        <input type="text" id="town_city" name="town_city" required><br>

        <label for="province">Province:</label>
        <input type="text" id="province" name="province" required><br>

        <label for="postal_code">Postal Code:</label>
        <input type="text" id="postal_code" name="postal_code" required><br>

        <label for="payment_method">Payment Method:</label>
        <select id="payment_method" name="payment_method" required onchange="toggleCashInput()">
            <option value="credit_card">Credit Card</option>
            <option value="paypal">PayPal</option>
            <option value="cash on delivery">Cash on Delivery</option>
            <option value="cash">Cash</option>
        </select><br>

        <div id="cash_input" style="display: none;">
            <label for="cash_amount">Enter Cash Amount:</label>
            <input type="text" id="cash_amount" name="cash_amount"><br>
        </div>

        <input type="submit" name="checkout" value="Proceed to Payment">
    </form>

    <?php include 'include/logsign.php'; ?>

<footer>
    <?php include 'include/footer.php'; ?>
</footer>

<script type="text/javascript" src="js/scripties.js"></script>

<script>
    function toggleCashInput() {
        var paymentMethod = document.getElementById("payment_method").value;
        var cashInput = document.getElementById("cash_input");

        if (paymentMethod === "cash") {
            cashInput.style.display = "block";
        } else {
            cashInput.style.display = "none";
        }
    }
</script>

</body>
</html>

<?php
} else {
    echo 'Your cart is empty.';
}
?>
