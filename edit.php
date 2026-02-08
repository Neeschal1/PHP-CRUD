<?php
include "db.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE id=$id"));

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $dept = $_POST['department'];

    mysqli_query($conn, "UPDATE students
                         SET name='$name', age='$age', department='$dept'
                         WHERE id=$id");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
</head>

<body>

    <h2>Edit Student</h2>

    <form method="POST">
        <input type="text" name="name" value="<?= $data['name'] ?>" required><br><br>
        <input type="number" name="age" value="<?= $data['age'] ?>" required><br><br>
        <input type="text" name="department" value="<?= $data['department'] ?>" required><br><br>
        <button type="submit" name="update">Update</button>
    </form>

</body>

</html>