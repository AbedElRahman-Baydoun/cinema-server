<?php 
require("../connection/connection.php");

$query = "CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    payment_method_id INT NOT NULL,
    amount DECIMAL(8,2) NOT NULL,
    status ENUM('pending', 'completed', 'failed') DEFAULT 'pending',
    paid_at DATETIME,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (payment_method_id) REFERENCES payment_methods(id))";

if ($conn->query($query) === TRUE) {
    echo "Table users created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>