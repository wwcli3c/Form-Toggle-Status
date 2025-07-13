<?php
$host = "localhost";
$user = "root";
$password = "e112233E";
$dbname = "user_form";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
