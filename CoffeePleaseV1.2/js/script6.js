document.addEventListener('DOMContentLoaded', function () {
    const viewLinks = document.querySelectorAll('.view-item');
    const modal = document.getElementById('myModal');
    const modalImg = document.querySelector('.popup-img');
    const modalItemName = document.querySelector('.popup-item-name');
    const modalItemPrice = document.querySelector('.popup-item-price');
    const closeBtn = document.querySelector('.close');
    const coffeeSizeSelect = document.getElementById('coffee-size');
    const quantityInput = document.getElementById('quantity');
    const addToCartBtn = document.getElementById('add-to-cart');
    const cartItemsContainer = document.querySelector('.cart-items');
    const cartPriceElement = document.getElementById('cartPrice');
    const buyNowBtn = document.getElementById('buy-now');

    let totalPrice = 0;

    // Open the modal when a view link is clicked
    viewLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const itemImgSrc = this.querySelector('.item-img').src;
            const itemName = this.parentElement.querySelector('.item-name').textContent;
            const itemPrice = parseFloat(this.parentElement.querySelector('.item-price').textContent.replace(/[^\d.]/g, ''));

            modalImg.src = itemImgSrc;
            modalItemName.textContent = itemName;
            modalItemPrice.textContent = `$${itemPrice.toFixed(2)}`;

            modal.style.opacity = 0;
            modal.style.display = 'flex';
            setTimeout(() => {
                modal.style.opacity = 1;
            }, 50);
        });
    });

    // Close the modal
    closeBtn.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    // Add item to cart
    addToCartBtn.addEventListener('click', function () {
        const selectedSize = coffeeSizeSelect.value;
        const quantity = parseInt(quantityInput.value);
        const itemName = modalItemName.textContent;
        const itemPrice = parseFloat(modalItemPrice.textContent.replace(/[^\d.]/g, ''));

        totalPrice += itemPrice * quantity;

        // Update cart count and total price
        const cartCount = document.getElementById('cartCount');
        const currentCount = parseInt(cartCount.textContent);
        cartCount.textContent = currentCount + 1;
        cartPriceElement.textContent = `₱${totalPrice.toFixed(2)}`;

        // Insert the item into the cart list
        const newItemHTML = `
            <div class="cart-item">
                <div class="cart-item-details">
                    <span>${quantity}x ${selectedSize}</span>
                    <span>${itemName}</span>
                </div>
            </div>
        `;
        cartItemsContainer.insertAdjacentHTML('beforeend', newItemHTML);

        modal.style.display = 'none';
    });

    // Buy Now functionality
    buyNowBtn.addEventListener('click', function () {
        const selectedSize = coffeeSizeSelect.value;
        const quantity = parseInt(quantityInput.value);
        const itemName = modalItemName.textContent;
        const itemPrice = parseFloat(modalItemPrice.textContent.replace(/[^\d.]/g, ''));

        // Calculate total price
        const totalPrice = itemPrice * quantity;

        // Redirect to checkout with item details in the URL
        window.location.href = `/CoffeePleaseV1.2/shop/checkout.html?item=${encodeURIComponent(itemName)}&size=${encodeURIComponent(selectedSize)}&quantity=${quantity}&total=${totalPrice.toFixed(2)}`;
    });
});

//  LOADER

window.addEventListener("load", () => { 
    const loader = document.getElementById("loader-container"); 
    loader.style.display = "none";
});

// CART

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