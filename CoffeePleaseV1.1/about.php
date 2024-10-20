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

<style>

.image-section img {
    padding: 10px;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

p {
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
}

</style>

</head>

    <header class="navbar">
        <?php include 'object/header.php'; ?>
    </header>

<body>
    <main>
        <div class="aboutText">

            <div class="heading">
                <h2>About Caffeine Cove</h2>
                <p>Welcome to Caffeine Cove, your ultimate destination for all things coffee! At Caffeine Cove, we are passionate about delivering exceptional coffee experiences to our customers, making every sip a moment to cherish.</p>
            </div>

            
            <div class="heading">
                <h2>Our Mission</h2>
                <p>Our mission at Caffeine Cove is simple yet profound: to bring the finest coffee beans from around the world to your cup. We believe that every coffee lover deserves the perfect brew, and we are dedicated to crafting the highest quality coffee products that exceed your expectations.</p>
            </div>


            <div class="heading">
                <h2>Quality Assurance</h2>
                <p>At Caffeine Cove, quality is our top priority. We source our coffee beans meticulously, ensuring they are ethically and sustainably grown. Each batch of beans undergoes rigorous testing and roasting processes to preserve their unique flavors and aromas, guaranteeing a delightful coffee experience with every sip.</p>
            </div>


            <div class="heading">
                <h2>Variety and Innovation</h2>
                <p>Explore a world of coffee variety and innovation at Caffeine Cove. From rich and bold espresso blends to smooth and flavorful single-origin coffees, we offer an extensive range of coffee options to suit every taste preference. Our commitment to innovation means we are constantly exploring new brewing techniques and flavor profiles to elevate your coffee journey.</p>
            </div>


            <div class="heading">
                <h2>Formerly named</h2>
            </div>

            <section class="image-section fade-up">
                <img src="images/_please.png">
                <img src="images/_please1.png">
            </section>

            <section class="image-section fade-up">
                <img src="images/_about2.jpg">
                <img src="images/_about3.jpg">
            </section>

            <div class="heading">
                <h2>Cozy Ambiance</h2>
            </div>

            <p>
                Relax in our cozy ambiance, designed to provide the perfect setting for enjoying your favorite coffee.
            </p>

            <section class="image-section fade-up"><img src="images/_cozy.jpg"></section>
    </main>

<!--    LOADER  -->
    <?php include 'object/loader.html'; ?>

<footer>
    <?php include 'object/footer.html'; ?>
</footer>

<script type="text/javascript" src="js/script6.js"></script>

</body>
</html>