<?php
include 'db_connect.php';

$result = mysqli_query($conn,"SELECT * FROM incidents");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Incidents</title>
</head>
<body>

<h2>All Incidents</h2>

<table border="1">

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Type</th>
    <th>Description</th>
    <th>Date</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['incident_title']; ?></td>
    <td><?php echo $row['incident_type']; ?></td>
    <td><?php echo $row['incident_description']; ?></td>
    <td><?php echo $row['incident_date']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>