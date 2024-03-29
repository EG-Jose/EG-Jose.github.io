<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$mysqli = require __DIR__ . "/database.php";

if (isset($_SESSION["user_id"])) {
    $sql = "SELECT `id`, `name`, `email`, `password_hash` FROM `user` WHERE `email` = ? LIMIT 1";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $_SESSION["user_id"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
}

if (!isset($_SESSION['popup_shown'])) {
    $_SESSION['popup_shown'] = false;
}

$mens_base_url = 'add/mens/image/';
$womens_base_url = 'add/womens/image/';
$item_base_url = 'item_details.php?type=';

$menshit_sql = "SELECT * FROM mens LIMIT 10";
$womenshit_sql = "SELECT * FROM womens LIMIT 10";

$menshit_result = $mysqli->query($menshit_sql);
$womenshit_result = $mysqli->query($womenshit_sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Home</title>

    <link rel="stylesheet" type="text/css" href="css/main2.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script src="https://kit.fontawesome.com/b9d5bac5fa.js" crossorigin="anonymous"></script>
</head>
<body class="index">

        <?php include 'include/header.php'; ?>
    
<div class="index-container">

    <div class="slider-container">
        <div class="slider">
            <div class="slide clone-end"><img src="images/cat.jpg"></div>
    
            <div class="slide"><img src="images/cat.jpg"></div>
            <div class="slide"><img src="images/cat.jpg"></div>
            <div class="slide"><img src="images/cat.jpg"></div>
            <div class="slide"><img src="images/cat.jpg"></div>
            <div class="slide"><img src="images/cat.jpg"></div>
    
            <div class="slide clone-start"><img src="images/cat.jpg"></div>
        </div>
    </div><!--    slider-container END  -->

    <div class="latest-news" id="options">
        <p><a href="latest">What's New</a></p>
        <p><a href="latest">What's Trending</a></p>
    </div>

            <div class="itemListContainer"> <!--===================================================================-->
                <p class="item-title" id="itcat1"></p><!--=========================MEN=======================-->
                    <div class="items-column-container" id="mens"><!--=============================================-->

            <div class="itemTest">
            <a>
                <img src="images/cat.jpg" class="item-imageTest">
                <div class="item-contentTest">
                    <p class="item-priceTest">1000</p>
                    <strong><p class="item-nameTest">Name</p></strong>
                    <p class="item-descTest"></p>
                </div>
            </a>
            </div>    

                    </div>  <!--=========================MEN=======================-->
            </div>  <!--===========================================================-->

<div class="recom-grid">
    <div class="recom-grid-slides">
        
        <div class="itemListContainer"> <!--===================================================================-->
            <p class="item-title" id="itcat1">Men</p><!--=========================MEN=======================-->
                <div class="items-column-container" id="mens"><!--=============================================-->

    <?php

        if ($menshit_result->num_rows > 0) {
            while ($row = $menshit_result->fetch_assoc()) {
                echo '<div class="item">';
                echo '<a href="' . $item_base_url . 'mens&id=' . $row["id"] . '">';
                echo '<img src="' . $mens_base_url . $row["item_image_filename"] . '" class="item-image">';
                echo '<div class="item-content">';
                echo '<p class="item-price">' . $row["item_price"] . '</p>';
                echo '<strong><p class="item-name">' . $row["item_name"] . '</p></strong>';
                echo '<p class="item-desc">' . $row["item_content"] . '</p>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }
    ?>

                </div>  <!--=========================MEN=======================-->
        </div>  <!--===========================================================-->

        <div class="itemListContainer"> <!--===================================================================-->
            <p class="item-title" id="itcat1">Womens</p><!--=========================women=====================-->
                <div class="items-column-container" id="mens"><!--=============================================-->

    <?php

        if ($womenshit_result->num_rows > 0) {
            while ($row = $womenshit_result->fetch_assoc()) {
                echo '<div class="item">';
                echo '<a href="' . $item_base_url . 'womens&id=' . $row["id"] . '">';
                echo '<img src="' . $womens_base_url . $row["item_image_filename"] . '" class="item-image">';
                echo '<div class="item-content">';
                echo '<p class="item-price">' . $row["item_price"] . '</p>';
                echo '<strong><p class="item-name">' . $row["item_name"] . '</p></strong>';
                echo '<p class="item-desc">' . $row["item_content"] . '</p>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

    ?>
                </div>  <!--=========================women=====================-->
        </div>  <!--===========================================================-->

    </div>
</div>  <!--    recom-grid END  -->

    <div class="recom-slide">
        <a class="recom-slide-view" href="">
            <p>View Product</p>
            <img src="images/xros3kit.jpg">
        </a>
        <div class="recom-slide-desc">
            <span style="font-size:2em;font-weight:bolder;color:#444;">Name</span><br>
                
        </div>
    </div>

    <div class="latest-news">
        <p>Best</p>
    </div>

        <div class="recom-slide">
            <a class="recom-slide-view" href="">
                <p>View Product</p>
                <img src="images/uwellpopreelp1pod_kit.jpg">
            </a>
            <div class="recom-slide-desc">
                <span style="font-size:2em;font-weight:bolder;color:#444;">Name</span><br>
                
            </div>
        </div>
        
    <div class="latest-news">
        <p>Best</p>
    </div>

        <div class="recom-slide">
            <a class="recom-slide-view" href="">
                <p>View Product</p>
                <img src="images/freemaxstarlux40Wkit.jpg">
            </a>
            <div class="recom-slide-desc">
                <span style="font-size:2em;font-weight:bolder;color:#444;">Name</span><br>
            </div>
        </div>
        
    </div>
</div>

</div>

<div class="aboutUs">
    <div class="aboutUs-container">
        <span class='app-name'>
            <span class='app-initial'>Old</span> Smoke
        </span>
    </div>
</div>


    <!--Login/Signup Panel-->
    <?php include 'include/logsign.php'; ?>

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