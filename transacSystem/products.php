<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$mysqli = require __DIR__ . "/database.php";

if (isset($_SESSION["user_id"])) {
    $user_sql = "SELECT * FROM user WHERE id = ?";
    $stmt = $mysqli->prepare($user_sql);
    $stmt->bind_param("i", $_SESSION["user_id"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
}

if (!isset($_SESSION['popup_shown'])) {
    $_SESSION['popup_shown'] = false;
}

$image_base_url = 'image/';
$item_base_url = 'item_details.php?type=';

$geekvape_sql = "SELECT * FROM geekvape LIMIT 10";
$smok_sql = "SELECT * FROM smok LIMIT 10";
$voopoo_sql = "SELECT * FROM voopoo LIMIT 10";

$geekvape_result = $mysqli->query($geekvape_sql);
$smok_result = $mysqli->query($smok_sql);
$voopoo_result = $mysqli->query($voopoo_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Products</title>

    <link rel="stylesheet" type="text/css" href="css/main1.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script src="https://kit.fontawesome.com/b9d5bac5fa.js" crossorigin="anonymous"></script>
</head>
<body class="products">

    <!--    Nav Bar -->
    <?php include 'include/header.php'; ?>
    
<div class="item-container">

    <div class="items-column left">

        <div class="index-panel">

            <div class="weblogo">
                <img src="images/bigLogo.jpg">
            </div>

            <div class="panopt">
                <a href="#itcat1"></a>
            </div>
            
            <div class="panopt">
                <a href="#itcat2"></a>
            </div>
            
            <div class="panopt">
                <a href="#itcat3"></a>
            </div>
            
            <!--<div class="panopt">
                <a href="#itcat3">Option 4</a>
            </div>-->

        </div>
    
    </div>

    <div class="items-column right">

        <div class="itemListContainer">
        <p class="item-title" id="itcat1"><a href="https://www.geekvape.com/"></a></p>
        <div class="items-column-container" id="itemCat1">

    <?php

        if ($geekvape_result->num_rows > 0) {
            while ($row = $geekvape_result->fetch_assoc()) {
                echo '<div class="item">';
                echo '<a href="' . $item_base_url . 'geekvape&id=' . $row["id"] . '">';
                echo '<img src="' . $image_base_url . $row["item_image_filename"] . '" class="item-image">';
                echo '<div class="item-content">';
                echo '<strong><p class="item-name">' . $row["item_name"] . '</p></strong>';
                echo '<p class="item-price">' . $row["item_price"] . '</p>';
                echo '<p class="item-desc">' . $row["item_content"] . '</p>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

    ?>

        </div>
        <div class="shbtn">
            <div></div><!--Just for spacing-->
            <div></div><!--Just for spacing-->
            <button class="toggleButton" data-target="itemCat1">
                <i class="fa fa-angles-down icon1"></i>
                <span class="buttonText">Show More</span>
                <i class="fa fa-angles-down icon2"></i>
            </button>            
        </div>
        </div>

    <!--==========Another Category==========-->

        <div class="itemListContainer">
        <p class="item-title" id="itcat2"><a href="https://store.smoktech.com/"></a></p>
        <div class="items-column-container" id="itemCat2">

    <?php

        if ($smok_result->num_rows > 0) {
            while ($row = $smok_result->fetch_assoc()) {
                echo '<div class="item">';
                echo '<a href="' . $item_base_url . 'smok&id=' . $row["id"] . '">';
                echo '<img src="' . $image_base_url . $row["item_image_filename"] . '" class="item-image">';
                echo '<div class="item-content">';
                echo '<strong><p class="item-name">' . $row["item_name"] . '</p></strong>';
                echo '<p class="item-price">' . $row["item_price"] . '</p>';
                echo '<p class="item-desc">' . $row["item_content"] . '</p>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

    ?>

            

        </div>
        <div class="shbtn">
            <div></div><!--Just for spacing-->
            <div></div><!--Just for spacing-->
            <button class="toggleButton" data-target="itemCat2">
                <i class="fa fa-angles-down icon1"></i>
                <span class="buttonText">Show More</span>
                <i class="fa fa-angles-down icon2"></i>
            </button>            
        </div>
        </div>
         
        
    <!--==========Another Category==========-->
         
        <div class="itemListContainer">
        <p class="item-title" id="itcat3"><a href="https://www.voopoo.com/"></a></p>
        <div class="items-column-container" id="itemCat3">

    <?php

        if ($voopoo_result->num_rows > 0) {
            while ($row = $voopoo_result->fetch_assoc()) {
                echo '<div class="item">';
                echo '<a href="' . $item_base_url . 'voopoo&id=' . $row["id"] . '">';
                echo '<img src="' . $image_base_url . $row["item_image_filename"] . '" class="item-image">';
                echo '<div class="item-content">';
                echo '<strong><p class="item-name">' . $row["item_name"] . '</p></strong>';
                echo '<p class="item-price">' . $row["item_price"] . '</p>';
                echo '<p class="item-desc">' . $row["item_content"] . '</p>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

    ?>

            

        </div>
        <div class="shbtn">
            <div></div><!--Just for spacing-->
            <button class="toggleButton" data-target="itemCat3">
                <i class="fa fa-angles-down icon1"></i>
                <span class="buttonText">Show More</span>
                <i class="fa fa-angles-down icon2"></i>
            </button>
        </div>
        </div>

    </div>

</div>

<!--Login/Signup Panel-->
<?php
        include 'include/logsign.php';
    ?>

<footer>
    <?php include 'include/footer.php'; ?>
</footer>

<script type="text/javascript" src="js/scripties.js"></script>

<?php if (!$_SESSION['popup_shown']): ?>
    <script type="text/javascript">
        window.onload = function() {
            showModal();
        };
    </script>
    <?php $_SESSION['popup_shown'] = true; ?>
<?php endif; ?>

</body>
</html>