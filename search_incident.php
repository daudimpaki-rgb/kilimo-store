<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Incident</title>
</head>
<body>

<h2>Search Incident By ID</h2>

<form method="GET">

    Incident ID:
    <input type="number" name="id">

    <input type="submit" value="Search">

</form>

<?php

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "SELECT * FROM incidents WHERE id='$id'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){

        while($row = mysqli_fetch_assoc($result)){

            echo "<h3>Incident Details</h3>";

            echo "ID: ".$row['incident_id']."<br>";
            echo "Title: ".$row['incident_title']."<br>";
            echo "Type: ".$row['incident_type']."<br>";
            echo "Description: ".$row['incident_description']."<br>";
            echo "Date: ".$row['incident_date']."<br>";
        }

    }else{

        echo "No Incident Found";

    }

}
?>

</body>
</html>