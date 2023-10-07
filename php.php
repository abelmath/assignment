<?php
$servername = "localhost";
$username = "localhost:3306";
$password = "0213";
$database = "pizzashop";

// Create connection
$conn = new mysqli($mysqli, $localhost:3306, $0213, $pizzashop = ;$pizzashop);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name']; // Replace 'name' with the actual form field names
$address = $_POST['address'];
$phone = $_POST['phone'];

// Prepare the SQL statement
$sql = "INSERT INTO orders (name, address, phone) VALUES ('$name', '$address', '$phone')";


