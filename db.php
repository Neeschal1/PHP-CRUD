<?php

$host = "127.0.0.1";
$username = "root";
$password = "root12345";
$database = "student_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connectiondsd failed: " . mysqli_connect_error());
}
