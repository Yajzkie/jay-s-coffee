<?php include('data.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table>
	<caption>COFFEE MENU</caption>
	<tr>
        <th>coffee</th>
        <th>price</th>
    </tr>
    <?php
        // Loop through each row of data and display it in the table
        foreach ($user_data as $row) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['item']) . "</td>";
            echo "<td>" . htmlspecialchars($row['price']) . "</td>";
            echo "</tr>";
        }
        ?>
    <tr>
        <th>pastry</th>
        <th>price</th>
    </tr>
    <?php
        // Loop through each row of data and display it in the table
        foreach ($user_data as $row) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['bagels']) . "</td>";
            echo "<td>" . htmlspecialchars($row['bagels_price']) . "</td>";
            echo "</tr>";
        }
        ?>
        <a href="welcome.html">Back</a>
	</table>
</body>
</html>