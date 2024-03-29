<?php
session_start();

$mysqli = require __DIR__ . "/database.php";

if (isset($_GET['id']) && isset($_GET['type'])) {
    $item_id = $_GET['id'];
    $item_type = $_GET['type'];

    if ($item_type !== 'mens' && $item_type !== 'womens') {
        echo 'Invalid item type.';
        exit;
    }

    $sql = "SELECT * FROM `" . $item_type . "` WHERE `id` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $item_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $item = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Item Details</title>

    <link rel="stylesheet" type="text/css" href="css/main1.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script src="https://kit.fontawesome.com/b9d5bac5fa.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <h1><?php echo htmlspecialchars($item["item_name"]); ?></h1>
    <p>Price: $<?php echo htmlspecialchars($item["item_price"]); ?></p>
    <p>Description: <?php echo htmlspecialchars($item["item_content"]); ?></p>
    <img src="<?php echo htmlspecialchars($item_type . '_base_url' . $item["item_image_filename"]); ?>" alt="Item Image">
    
    <!-- Add to Cart form -->
    <form method="post" action="process/add_to_cart.php">
        <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
        <input type="hidden" name="item_type" value="<?php echo $item_type; ?>">
        <input type="submit" name="add_to_cart" value="Add to Cart">
    </form>


    <!-- Buy Now form -->
    <form method="post" action="process/add_to_cart.php">
        <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="total_amount" value="<?php echo htmlspecialchars($item["item_price"]); ?>">
        <input type="hidden" name="currency" value="USD">
        <input type="hidden" name="payment_method" value="paypal">
        <input type="submit" name="buy_now" value="Buy Now">
    </form>

    <?php include 'include/logsign.php'; ?>

<footer>
    <?php include 'include/footer.php'; ?>
</footer>

<script type="text/javascript" src="js/scripties.js"></script>

</body>
</html>

<?php
    } else {
        echo 'Item not found.';
    }

    $stmt->close();
} else {
    echo 'Error: Item ID or Type not provided.';
}
?>