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

    let totalPrice = 0;

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

    closeBtn.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    addToCartBtn.addEventListener('click', function () {
        const selectedSize = coffeeSizeSelect.value;
        const quantity = parseInt(quantityInput.value);
        const itemName = modalItemName.textContent;
        const itemPrice = parseFloat(modalItemPrice.textContent.replace(/[^\d.]/g, ''));

        totalPrice += itemPrice * quantity;

        const cartCount = document.getElementById('cartCount');
        const currentCount = parseInt(cartCount.textContent);
        cartCount.textContent = currentCount + 1;
        cartPriceElement.textContent = `$${totalPrice.toFixed(2)}`;

        const newItemHTML = `
            <div class="cart-item">
                <div class="cart-item-details">
                    <span>${quantity}x ${selectedSize}</span>
                    <span>${itemName} at $${itemPrice.toFixed(2)}</span>
                </div>
            </div>
        `;

        cartItemsContainer.insertAdjacentHTML('beforeend', newItemHTML);

        modal.style.display = 'none';
    });

    const buyNowBtn = document.getElementById('buy-now');

    buyNowBtn.addEventListener('click', function () {
        const selectedSize = coffeeSizeSelect.value;
        const quantity = parseInt(quantityInput.value);
        const itemName = modalItemName.textContent;
        const itemPrice = parseFloat(modalItemPrice.textContent.replace(/[^\d.]/g, ''));

        const totalPrice = itemPrice * quantity;

        window.location.href = `/coffeepleasev1.1/shop/checkout.php?item=${itemName}&size=${selectedSize}&quantity=${quantity}&total=${totalPrice}`;
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
