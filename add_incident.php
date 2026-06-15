<!DOCTYPE html>
<html>
<head>
    <title>Add Incident</title>
</head>
<body>

<h2>Record New Incident</h2>

<form action="save_incident.php" method="POST">

    Title:
    <input type="text" name="title" required><br><br>

    Type:
    <input type="text" name="type" required><br><br>

    Description:
    <textarea name="description" required></textarea><br><br>

    Date:
    <input type="date" name="date" required><br><br>

    <input type="submit" value="Save Incident">

</form>

</body>
</html>