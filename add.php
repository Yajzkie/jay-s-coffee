<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('coffee_background.jpg'); /* Replace 'coffee_background.jpg' with your actual background image */
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #6D4C41; /* Brown color for labels */
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4E342E; /* Dark brown color for button */
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #3E2723; /* Darker brown on hover */
        }

        a {
            display: block;
            margin-top: 10px;
            text-align: center;
            color: #8D6E63; /* Light brown color for link */
            text-decoration: none;
            cursor: pointer;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
    include "conn.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect the form data
        $item = $_POST["item"];
        $price = $_POST["price"];
        $bagels = $_POST["bagels"];
        $bagels_price = $_POST["bagels_price"];

        mysqli_query($conn, "INSERT INTO coffee_menu(item, price, bagels, bagels_price) VALUES ('$item', '$price', '$bagels', '$bagels_price')");
    }
?>

<!-- HTML form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="item">Item:</label>
    <input type="text" name="item" required>

    <label for="price">Price:</label>
    <input type="number" name="price" required>

    <label for="bagels">Bagels:</label>
    <input type="text" name="bagels" required>

    <label for="bagels_price">Price:</label>
    <input type="number" name="bagels_price" required>

    <button type="submit">Submit</button><a href="coffee.php">Back</a>
</form>



</body>
</html>
