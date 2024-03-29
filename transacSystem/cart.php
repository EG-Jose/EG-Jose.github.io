<?php
session_start();

$mysqli = require __DIR__ . "/database.php";

function fetch_item_details($mysqli, $item_id, $item_type) {
    $table_name = ($item_type === 'mens') ? 'mens' : 'womens';
    $sql = "SELECT * FROM `$table_name` WHERE `id` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $item_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cart_items = $_SESSION['cart'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Your Cart</title>

    <link rel="stylesheet" type="text/css" href="css/main2.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script src="https://kit.fontawesome.com/b9d5bac5fa.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <div>
        <h1>Items in your cart</h1>
    </div>

    <?php
        foreach ($cart_items as $cart_item) {
            $item_id = $cart_item['id'];
            $item_type = $cart_item['type'];

            $item_details = fetch_item_details($mysqli, $item_id, $item_type);

            if ($item_details) {
    ?>          
            
                <div>
                    <h2><?= htmlspecialchars($item_details["item_name"]) ?></h2>
                    <p>Price: $<?= htmlspecialchars($item_details["item_price"]) ?></p>
                    <form method="post" action="process/remove_from_cart.php">
                        <input type="hidden" name="item_id" value="<?= $item_id ?>">
                        <input type="submit" name="remove_from_cart" value="Remove">
                    </form>
                </div>
    <?php
            } else {
                echo 'Item details not found.';
            }
        }
    ?>
    <a href="checkout.php">Proceed to Checkout</a>

    <?php include 'include/logsign.php'; ?>

<footer>
    <?php include 'include/footer.php' ?>
</footer>

<script type="text/javascript" src="js/scripties.js"></script>

</body>
</html>

<?php
} else {
    echo 'Your cart is empty.';
}
?>
