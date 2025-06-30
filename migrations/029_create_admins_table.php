<?php 
require("../connection/connection.php");

$query = "CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL UNIQUE,
    role VARCHAR(50) DEFAULT 'admin',
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE)";

if ($conn->query($query) === TRUE) {
    echo "Table users created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>