<style>

.modal {
    display: none;
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    overflow: auto;
    transition: opacity 0.3s ease;
}

.modal-content {
    background-color: white;
    margin: 10% auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 80%;
    height: auto;
    max-width: 700px;
    display: flex;
    position: relative;
}

.modal-left {
    flex: 1;
    text-align: center;
}

.modal-left img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}

.modal-right {
    flex: 1;
    padding-left: 20px;
}

.close {
    color: #6d4c41;
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

.popup-item-name {
    color: #6d4c41;
    font-size: 24px;
    margin-bottom: 10px;
}

.popup-item-price {
    color: #6d4c41;
    font-size: 18px;
    margin-bottom: 20px;
}

label {
    color: #6d4c41;
    font-size: 16px;
    margin-bottom: 5px;
    flex: 1;
    margin-right: 10px;
}

.input-group {
    margin-bottom: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

select,
input[type="number"] {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: calc(50% - 16px);
}

.purchase {
    padding: 10px;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    margin-top: 15px;
    transition: background-color 0.2s ease-in-out;
}

.purchase.buy {
    background-color: #a0522d;
}

.purchase.buy:hover {
    background-color: #c87a55;
}

.purchase.add {
    background-color: #ffbf00;
}

.purchase.add:hover {
    background-color: #ffe728;
}

</style>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close"><i class="fa fa-times"></i></span>
        <div class="modal-left">
            <img src="" alt="" class="popup-img">
        </div>
        <div class="modal-right">
            <h2 class="popup-item-name"></h2>
            <p class="popup-item-price"></p>
            <div class="input-group">
                <label for="coffee-size">Select Size:</label>
                <select name="coffee-size" id="coffee-size">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
            </div>
            <div class="input-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <button type="submit" class="purchase buy" id="buy-now">Buy Now</button>
            <button type="button" class="purchase add" id="add-to-cart">Add to Cart</button>
        </div>
    </div>
</div>

