<?php
require 'db.php';

$id = $_POST['id'];
$status = $_POST['status'];

$newStatus = $status == 1 ? 0 : 1;

$stmt = $conn->prepare("UPDATE users SET status = ? WHERE id = ?");
$stmt->bind_param("ii", $newStatus, $id);

if ($stmt->execute()) {
    echo "Success";
} else {
    echo "Error";
}

$conn->close();
