<?php
$conn = mysqli_connect("127.0.0.1", "root", "root12345", "student_db");

if (!$conn) {
    die("Connectiondsd failed: " . mysqli_connect_error());
}
