<?php 
require("../connection/connection.php");

$query = "CREATE TABLE snacks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(6,2) NOT NULL)";

if ($conn->query($query) === TRUE) {
    echo "Table users created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>