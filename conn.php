<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "coffee_shop";

$conn = new mysqli("localhost", "root", "", "coffee_shop");
if ($conn-> connect_error) {
	die("conection)_failed:". $conn-> connect_error);
 }
?>