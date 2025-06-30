<?php 
require("../connection/connection.php");


$query = "CREATE TABLE films (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    cast TEXT,
    rating VARCHAR(10),
    trailer_url VARCHAR(255))";

if ($conn->query($query) === TRUE) {
    echo "Table users created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>