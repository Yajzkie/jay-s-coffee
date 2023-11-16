<?php
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect order data
    $customerName = $_POST["customer_name"];
    $itemName = $_POST["item_name"];
    $quantity = $_POST["quantity"];

    // Validate data (add more validation as needed)

    // Insert order into the database
    $sql = "INSERT INTO orders (customer_name, item_name, quantity) VALUES ('$customerName', '$itemName', $quantity)";
    
    if ($conn->query($sql) === TRUE) {
        // Order placed successfully, redirect to the welcome page
        header("Location: list.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>