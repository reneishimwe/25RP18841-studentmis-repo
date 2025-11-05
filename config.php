<?php
$host = 'db';
$user = 'mis_user';
$password = 'mispass123';
$database = 'student_mis';

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>