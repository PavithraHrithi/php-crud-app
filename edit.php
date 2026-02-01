<?php
include "db.php";

$id = $_GET['id'];

// Fetch existing data
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

// Update data
if (isset($_POST['update'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $query = "UPDATE students SET name='$name', email='$email' WHERE id=$id";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">

    <title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>

<form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</form>

<br>
<a href="index.php">Back to List</a>

</body>
</html>
