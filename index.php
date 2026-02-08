<?php include "db.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Student CRUD</title>
</head>

<body>

    <h2>Add Student</h2>

    <form method="POST">
        Name: <input type="text" name="name" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        Department: <input type="text" name="department" required><br><br>
        <button type="submit" name="save">Save</button>
    </form>

    <?php
    // Insert data
    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $dept = $_POST['department'];

        mysqli_query($conn, "INSERT INTO students(name, age, department)
                         VALUES('$name', '$age', '$dept')");
    }
    ?>

    <hr>

    <h2>Student List</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Department</th>
            <th>Action</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM students");

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>