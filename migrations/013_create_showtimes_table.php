<?php 
require("../connection/connection.php");

$query = "CREATE TABLE showtimes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    film_id INT NOT NULL,
    auditorium_id INT NOT NULL,
    show_datetime DATETIME NOT NULL,
    start_date DATE,
    end_date DATE,
    FOREIGN KEY (film_id) REFERENCES films(id) ON DELETE CASCADE,
    FOREIGN KEY (auditorium_id) REFERENCES auditoriums(id) ON DELETE CASCADE)";

if ($conn->query($query) === TRUE) {
    echo "Table users created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>