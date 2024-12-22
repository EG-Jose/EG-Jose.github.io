<?php
    if ($drinks_result->num_rows > 0) {
        while ($row = $drinks_result->fetch_assoc()) {
            echo '<div class="item">';
            echo    '<a href="#" class="view-item">';
            echo        '<p class="view">View</p>';
            echo        '<img src="' . $drinks_base_url . $row["item_image_filename"] . '" class="item-img">';
            echo    '</a>';
            echo    '<div class="item-details devide">';
            echo        '<div class="devide name">';
            echo            '<p class="item-name">' . $row["item_name"] . '</p>';
            echo        '</div>';
            echo        '<div class="devide price">';
            echo            '<p class="item-price">' . '₱' . $row["item_price"] . '</p>';
            echo        '</div>';
            echo    '</div>';
            echo '</div>';
        }
    } else {
        echo "0 results";
    }
?>