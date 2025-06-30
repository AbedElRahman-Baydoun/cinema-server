<?php 
require("../connection/connection.php");

$query = "CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    booking_id INT,
    user_id INT NOT NULL,
    seat_id INT NOT NULL,
    showtime_id INT NOT NULL,
    price DECIMAL(8,2) NOT NULL,
    ticket_status ENUM('booked', 'cancelled') DEFAULT 'booked',
    FOREIGN KEY (booking_id) REFERENCES bookings(id) ON DELETE SET NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (seat_id) REFERENCES seats(id),
    FOREIGN KEY (showtime_id) REFERENCES showtimes(id))";

if ($conn->query($query) === TRUE) {
    echo "Table users created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>