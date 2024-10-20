<?php

$mysqli = require $_SERVER['DOCUMENT_ROOT'] . "/coffeepleasev1.1/database.php";

$drinks_base_url = '../add/drinks/image/';
$drinks_sql = "SELECT * FROM drinks";
$drinks_result = $mysqli->query($drinks_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caffeine Cove | Drinks</title>
     
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script src="https://kit.fontawesome.com/b9d5bac5fa.js" crossorigin="anonymous"></script>

</head>

    <header class="navbar">
        <?php include '../object/header.php'; ?>
    </header>

<body>
    <main>
        <section class="about">
            <div class="text-container products">
                <img id="productImage" src="../images/drinks.png">
            </div>
        </section>

        <section class="product-list">
            <a href="index.php" class="scroll-link">All Products</a>
            <a href="drinks.php" class="scroll-link">Drinks</a>
            <a href="foods.php" class="scroll-link">Foods</a>
        </section>

        <!--  =====================================================================================================================  -->
        <!--  =====================================================================================================================  -->

        <div class="heading" id="drinks">
            <h2>Drinks Menu</h2>
        </div>

            <div class="container">
            
                <?php include '../object/item-drinks.php'; ?>

            </div>

        </div>

        <!--  =====================================================================================================================  -->
        <!--  =====================================================================================================================  -->
        
    </main>

<!--    ITEM MODAL  -->
    <?php include '../object/item-modal.php'; ?>

<!--    LOADER  -->
    <?php include '../object/loader.html'; ?>
    
<footer>
    <?php include '../object/footer.html'; ?>
</footer>

<script type="text/javascript" src="../js/script6.js"></script>

</body>
</html>