<?php 
require("../connection/connection.php");

$query = "CREATE TABLE seats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    row_label VARCHAR(5) NOT NULL,
    column_number INT NOT NULL,
    is_vip BOOLEAN DEFAULT FALSE,
    auditorium_id INT NOT NULL,
    FOREIGN KEY (auditorium_id) REFERENCES auditoriums(id) ON DELETE CASCADE)";

if ($conn->query($query) === TRUE) {
    echo "Table users created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>