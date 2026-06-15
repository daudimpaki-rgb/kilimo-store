<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cyberDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// $sql = mysqli_query($conn, "CREATE TABLE incidents (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     incident_title VARCHAR(255) NOT NULL,
//     incident_type VARCHAR(255) NOT NULL,
//     incident_description TEXT,
//     incident_date DATE NOT NULL
// );");
// if ($sql) {
//     echo "Table users created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }
?>