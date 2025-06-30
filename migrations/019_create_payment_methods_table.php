<?php 
require("../connection/connection.php");

$query = "CREATE TABLE payment_methods (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    card_holder_name VARCHAR(100) NOT NULL,
    masked_card_number VARCHAR(19) NOT NULL,
    expiration_month TINYINT NOT NULL,
    expiration_year YEAR NOT NULL,
    card_type ENUM('Visa', 'MasterCard') DEFAULT 'Visa',
    is_default BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE)";

if ($conn->query($query) === TRUE) {
    echo "Table users created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>