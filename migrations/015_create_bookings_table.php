<?php 
require("../connection/connection.php");

$query = "CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    showtime_id INT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (showtime_id) REFERENCES showtimes(id))";

if ($conn->query($query) === TRUE) {
    echo "Table users created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>