<?php
// SHOW ERRORS (for development only)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// DATABASE CONFIG
$host = "localhost";
$user = "root";
$pass = "";
$db   = "student_coursework_db";

// CREATE CONNECTION
$conn = mysqli_connect($host, $user, $pass, $db);

// CHECK CONNECTION
if (!$conn) {
    die("❌ Database connection failed: " . mysqli_connect_error());
}

// SET CHARSET (IMPORTANT)
mysqli_set_charset($conn, "utf8");

// SUCCESS (OPTIONAL - remove later)
// echo "✅ Database connected successfully";
?>
