<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <style>
        body {
            background-image: url("img/img4.jpeg");
            background-size: cover;
            background-position: center center; 
            background-repeat: no-repeat;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin: 20px 0 8px;
            font-size: 14px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<form method="post" action="order.php">
    <h2>Place Your Order</h2>

    <label for="customer_name">Customer Name:</label>
    <input type="text" id="customer_name" name="customer_name" required>

    <label for="item_name">Item Name:</label>
    <input type="text" id="item_name" name="item_name" required>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" required>

    <button type="submit" href="welcome.html">Place Order</button>
</form>

</body>
</html>
