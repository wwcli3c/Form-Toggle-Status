<?php
require 'db.php';

$name = $_POST['name'];
$age = $_POST['age'];

$stmt = $conn->prepare("INSERT INTO users (name, age) VALUES (?, ?)");
$stmt->bind_param("si", $name, $age);

if ($stmt->execute()) {
    echo "Success";
} else {
    echo "Error";
}

$conn->close();
