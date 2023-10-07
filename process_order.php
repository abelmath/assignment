<?php
// Establish a database connection (you'll need to replace these details with your own)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$pizza_type = $_POST['pizza_type'];
$toppings = $_POST['toppings'];
$quantity = $_POST['quantity'];

// Insert data into the database
$sql = "INSERT INTO pizza_orders (pizza_type, toppings, quantity) VALUES ('$pizza_type', '$toppings', $quantity)";

if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
