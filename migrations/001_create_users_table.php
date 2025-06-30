<?php 
require("../connection/connection.php");

$query = "CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        mobile_number VARCHAR(20) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        age INT,
        favorite_genre VARCHAR(50),
        communication_preference ENUM('email', 'sms', 'none') DEFAULT 'email')";

if ($conn->query($query) === TRUE) {
    echo "Table users created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>