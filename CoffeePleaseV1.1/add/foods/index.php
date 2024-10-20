<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f0f0f0;
    }

    .addForm {
        width: 80%;
        max-width: 600px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 8px;
    }

    input[type="text"],
    input[type="file"],
    input[type="submit"] {
        margin-bottom: 16px;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

</head>
<body>
    <div class="addForm">
        <h2>Add Food</h2>
        <form action="add_item_process.php" method="POST" enctype="multipart/form-data">
            <label>Item Name:</label>
            <input type="text" id="item_name" name="item_name">

            <label>Item Price:</label>
            <input type="text" id="item_price" name="item_price">

            <label>Item Image:</label>
            <input type="file" id="item_image" name="item_image">

            <input type="submit" value="Add Item">
        </form>
        <a href="/coffeepleasev1.1/add/index.html">Home</a>
    </div>
</body>
</html>
