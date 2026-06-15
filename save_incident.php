<?php

include 'db_connect.php';

$title = $_POST['title'];
$type = $_POST['type'];
$description = $_POST['description'];
$date = $_POST['date'];

$sql = "INSERT INTO incidents
(incident_title, incident_type, incident_description, incident_date)
VALUES
('$title','$type','$description','$date')";

if(mysqli_query($conn,$sql)){
    echo "Incident Recorded Successfully";
}else{
    echo "Error: " . mysqli_error($conn);
}

?>