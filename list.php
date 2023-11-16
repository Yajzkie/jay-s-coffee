<?php
include "conn.php";

// Fetch orders from the database
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

// Check if there are orders
if ($result->num_rows > 0) {
    $orders = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $orders = [];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        th, td {
            padding: 16px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        tbody td:first-child {
            width: 10%;
        }

        tbody td:nth-child(2) {
            width: 20%;
        }

        tbody td:nth-child(3) {
            width: 30%;
        }

        tbody td:nth-child(4) {
            width: 15%;
        }

        tbody td:nth-child(5) {
            width: 25%;
        }
        caption{
            text-align: left;
            font-size: 80px;
            font-family: arial;
        }
    </style>
</head>
<body>


<?php if (!empty($orders)): ?>
    <table>
        <caption>Orders List</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Order Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $order['id']; ?></td>
                    <td><?= $order['customer_name']; ?></td>
                    <td><?= $order['item_name']; ?></td>
                    <td><?= $order['quantity']; ?></td>
                    <td><?= date('F j, Y, g:i a', strtotime($order['order_date'])); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <a href="welcome.html">Back</a>
    </table>
<?php else: ?>
    <p style="text-align: center;">No orders found.</p>
<?php endif; ?>

</body>
</html>
