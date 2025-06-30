<?php 
require("../connection/connection.php");

$query = "CREATE TABLE payment_ticket (
    id INT AUTO_INCREMENT PRIMARY KEY,
    payment_id INT NOT NULL,
    ticket_id INT NOT NULL,
    FOREIGN KEY (payment_id) REFERENCES payments(id),
    FOREIGN KEY (ticket_id) REFERENCES tickets(id))";

if ($conn->query($query) === TRUE) {
    echo "Table users created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>