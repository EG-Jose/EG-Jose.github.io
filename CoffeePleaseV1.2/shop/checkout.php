<?php
// Retrieve item details from URL parameters
$itemName = $_GET['itemName'] ?? '';
$itemPrice = $_GET['itemPrice'] ?? '';
$selectedSize = $_GET['selectedSize'] ?? '';
$quantity = $_GET['quantity'] ?? 1; // Default to 1 if not provided

// Display item details on the checkout page
echo "<h2>Checkout</h2>";
echo "<p>Item Name: $itemName</p>";
echo "<p>Item Price: $itemPrice</p>";
echo "<p>Selected Size: $selectedSize</p>";
echo "<p>Quantity: $quantity</p>";
?>