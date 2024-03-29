<?php

$mysqli = require __DIR__ . "/database.php";

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

?>

<div class="navbar" id="myNavbar">
    <div class="logo"><p class="highlight"></p></div>
    <span class="navlogo">
        <span class="navlogo-initial">TRIFTEE</span></span>
    <a class="name-brand" href="">MEN</a>
    <a class="name-brand" href="">WOMEN</a>
    <a class="name-brand" href="">UNISEX</a>
    <a href="index.php" class="active">HOME</a>
    <a class="openbtn" onclick="openNav()"><i class="fa-solid fa-bars"></i></a>
    <a></a> <!-- Padding -->
    <div class="user active">
        <?php if (isset($user)): ?>
            <a class="logoutBtn" href="process/logout.php">
                <i class="fa fa-power-off"></i></a>
        <p><?= htmlspecialchars($user["name"]) ?></p>
        <?php endif; ?>
    </div>
</div>

<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-xmark"></i></a>
    <a class="sidebar-link categ" href="products.php">Products</a>
    
    <div class="sidebar-categ">Item</div>
    <a class="sidebar-link" href="#">Link</a>
    <a class="sidebar-link" href="#">Link</a>
    <a class="sidebar-link" href="#">Link</a>
    <a class="sidebar-link" href="#">Link</a>
    <a class="sidebar-link" href="#">Link</a>
    
    <div class="sidebar-categ">Item</div>
    <a class="sidebar-link" href="#">Link</a>
    <a class="sidebar-link" href="#">Link</a>
    <a class="sidebar-link" href="#">Link</a>
    <a class="sidebar-link" href="#">Link</a>
    <a class="sidebar-link" href="#">Link</a>
    
    <div class="sidebar-categ">Item</div>
    <a class="sidebar-link" href="#">Link</a>
    <a class="sidebar-link" href="#">Link</a>
    <a class="sidebar-link" href="#">Link</a>
    <a class="sidebar-link" href="#">Link</a>
    <a class="sidebar-link" href="#">Link</a>
</div>