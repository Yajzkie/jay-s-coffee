<?php
include('conn.php');


$sql = "SELECT * FROM coffee_menu";
$result = $conn->query($sql);


if ($result && $result->num_rows > 0) {
   
    while ($row = $result->fetch_assoc()) {
        $user_data[] = $row;
    }


    $result->free_result();
} else {

    $user_data = array();
}


$conn->close();
?>
