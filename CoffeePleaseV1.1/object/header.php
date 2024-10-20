<style>

:root {
    --theme: #e1c5ad;
    --black-col: #2c2528;
    --white-col: white;
    --heading-col: #613b29;
    --page: #5c4024;
}

.navbar {
    position: fixed;
    top: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: var(--black-col);
    font-weight: 500;
    font-style: normal;
    padding-top: 10px;
    background-color: white;
    z-index: 1;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.logo img {
    width: 250px;
    height: auto;
    margin-right: 20px;
}

.search-bar {
    display: flex;
    align-items: center;
    background-color: #f5f5f5;
    border-radius: 20px;
    padding: 5px;
    margin: 10px;
}

.search-bar input[type="text"] {
    border: none;
    border-radius: 20px;
    padding: 10px;
    margin-left: 10px;
    font-size: 14px;
    flex-grow: 1;
}

.search-bar input[type="text"]:focus {
    outline: none;
}

.navbar-links {
    list-style: none;
    margin: 0;
    padding: 10px;
    display: flex;
}

.navbar-links li {
    margin-right: 20px;
    position: relative; 
}

.navbar-links li a {
    color: var(--black-col);
    text-decoration: none;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 1em;
    transition: color 0.3s ease;
}

.navbar-links li a:hover {
    color: #cfa92c;
}

.social-icons {
    list-style: none;
    margin: -10px;
    padding: 10px;
    display: flex;
    align-items: center;
}

.social-icons li {
    margin-right: 10px;
}

.social-icons li a {
    display: inline-block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    color: white;
    background-color: #333;
    border-radius: 50%;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.social-icons li a:hover {
    background-color: #cfa92c;
}

.dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: var(--theme);
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.dropdown li {
    padding: 10px;
}

.dropdown li:last-child {
    border-bottom: none;
}

.dropdown a {
    text-decoration: none;
    display: block;
}

.dropdown-link:hover .dropdown {
    display: block;
}

@media only screen and (min-width: 768px) {
    .logo img {
        width: 200px;
    }

    .navbar-links {
        display: flex;
    }

    .menu-toggle {
        display: none;
    }

    .cart-panel {
        width: 350px;
        right: -350px;
    }
}

</style>

<div class="logo">
    <img src="/coffeepleasev1.1/images/caffinecove.png">
</div>
<ul class="navbar-links">
    <li><a href="/coffeepleasev1.1/">Home</a></li>
    <li><a href="/coffeepleasev1.1/shop/">Shop</a></li>
    <li><a href="/coffeepleasev1.1/about.php">About Us</a></li>
    <li><a class="cartBtn" id="openCartBtn"><i class="fa fa-cart-shopping"></i> Cart</a></li>
</ul>
<nav>
    <ul class="social-icons">
        <li>
            <div class="search-bar">
                <i class="fa fa-magnifying-glass"></i><input type="text" class="mysearch" onkeyup="searchStudent()" placeholder="Search..">
            </div>
        </li>
        <li><a><i class="fa fa-facebook"></i></a></li>
        <li><a><i class="fa fa-twitter"></i></a></li>
        <li><a><i class="fa fa-instagram"></i></a></li>
        <li><a><i class="fa fa-youtube"></i></a></li>
    </ul>
</nav>

<style>

.cart-panel {
    position: fixed;
    top: 0;
    right: -300px;
    width: 300px;
    height: 100%;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 1;
    transition: right 0.3s ease;
    padding: 20px;
    overflow-y: auto;
}

.cart-panel.show {
    right: 0;
}

.cart-total {
    border-top: 0.1em solid;
    border-bottom: 0.1em solid;
    padding: 10px;
}

.cart-total p {
    display: block;
    justify-content: left;
}

</style>

<div id="cartPanel" class="cart-panel">
    <h3>Cart</h3>
    <h2>Your Items</h2>
        <div class="cart-items"></div>
    <div class="cart-total">
        <p>Total: <span id="cartPrice">₱0.00</span></p>
        <p>Items in Cart: <span id="cartCount">0</span></p>
    </div>
    <div class="cart-items">
        <h4>You might like</h4>
    </div>
</div>

<script>
    const openCartBtn = document.getElementById('openCartBtn');
    const cartPanel = document.getElementById('cartPanel');

    openCartBtn.addEventListener('click', () => {
        cartPanel.classList.toggle('show');
    });

    window.addEventListener('click', function (e) {
        if (!cartPanel.contains(e.target) && e.target !== openCartBtn) {
            cartPanel.classList.remove('show');
        }
    });
</script>