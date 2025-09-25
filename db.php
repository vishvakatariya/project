<?php
$host = 'localhost';
$db   = 'scentaura';
$user = 'root';
$pass = '';

$conn = new mysqli('localhost', 'root','', 'scentaura');

if ($conn->connect_error)
     {
    die("Database connection failed: " . $conn->connect_error);
}
else {
    echo "✅ Connected successfully!";
}
?>
