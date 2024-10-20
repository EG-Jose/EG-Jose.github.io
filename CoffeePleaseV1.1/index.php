<?php

$mysqli = require $_SERVER['DOCUMENT_ROOT'] . "/coffeepleasev1.1/database.php";

$drinks_base_url = 'add/drinks/image/';
$foods_base_url = 'add/foods/image/';
$item_base_url = 'item_details.php?type=';

$drinks_sql = "SELECT * FROM drinks ORDER BY created_at DESC LIMIT 10";
$foods_sql = "SELECT * FROM foods ORDER BY created_at DESC LIMIT 10";

$drinks_result = $mysqli->query($drinks_sql);
$foods_result = $mysqli->query($foods_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caffeine Cove | Home</title>
     
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script src="https://kit.fontawesome.com/b9d5bac5fa.js" crossorigin="anonymous"></script>

</head>

    <header class="navbar">
        <?php include 'object/header.php'; ?>
    </header>

<body>
    <main>
        <section class="image-section fade-up"><img src="images/CP_X_FRIENDS_BANNER_1728x.png"></section>

        <section class="about fade-up">
            <div class="text-container">
                <h2 style="font-family: 'Times New Roman', Times, serif;">Say Hello to<br><span class="highlight">Caffeine Cove</span></h2>
                <p>We are Caffeine Cove, a shop made to suit everyone's coffee needs.
                Order your freshly made coffee from the finest beans and feel refreshed!</p>
                <a class="orderlink" href="shop/products.php">Order a Coffee</a>        
            </div>
        </section>

        <!--  =====================================================================================================================  -->
        <!--  =====================================================================================================================  -->

        <div class="heading">   <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!DRINKS!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
            <h2>Drinks Menu</h2>
        </div>

            <div class="container">

                <?php include 'object/item-drinks.php'; ?>

            </div>

        </div>

        <!--  =====================================================================================================================  -->
        <!--  =====================================================================================================================  -->

        <div class="heading">   <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!FOODS!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
            <h2>Foods Menu</h2>
        </div>

            <div class="container">

                <?php include 'object/item-foods.php'; ?>

            </div>

        </div>

        <!--  =====================================================================================================================  -->
        <!--  =====================================================================================================================  -->
        
    </main>



<section class="get-in-touch fade-up">
    <div class="container">
        <h2>Get In Touch</h2>
        <form action="#" method="post">
            <input type="email" name="email" placeholder="Enter your email address">
            <button type="submit">Submit</button>
        </form>
    </div>
</section>

<!--    ITEM MODAL  -->
    <?php include 'object/item-modal.php'; ?>

<!--    LOADER  -->
    <?php include 'object/loader.html'; ?>

<!--    FOOTER  -->

<footer>
    <?php include 'object/footer.html'; ?>
</footer>

<script type="text/javascript" src="js/script6.js"></script>

</body>
</html>