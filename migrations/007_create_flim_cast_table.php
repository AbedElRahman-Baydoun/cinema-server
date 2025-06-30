<?php 
require("../connection/connection.php");

$query = "CREATE TABLE film_cast (
    id INT AUTO_INCREMENT PRIMARY KEY,
    film_id INT NOT NULL,
    actor_id INT NOT NULL,
    role_name VARCHAR(100),
    FOREIGN KEY (film_id) REFERENCES films(id) ON DELETE CASCADE,
    FOREIGN KEY (actor_id) REFERENCES actors(id) ON DELETE CASCADE
)";

if ($conn->query($query) === TRUE) {
    echo "Table users created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>