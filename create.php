<?php
include "db.php";

if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $query = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>

<h2>Add New Student</h2>

<form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <button type="submit" name="submit">Save</button>
</form>

<br>
<a href="index.php">Back to List</a>

</body>
</html>
