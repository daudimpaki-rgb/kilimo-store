<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cyberDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = mysql_query($conn, "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);");
if ($sql) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>