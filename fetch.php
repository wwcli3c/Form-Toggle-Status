<?php
require 'db.php';

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = $conn->query($sql);

echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Toggle</th></tr>";

while ($row = $result->fetch_assoc()) {
    $status = $row['status'];
    $btnClass = $status == 1 ? "status-1" : "status-0";
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td>{$status}</td>
            <td>
                <button class='status-btn $btnClass' data-id='{$row['id']}' data-status='{$status}'>Toggle</button>
            </td>
          </tr>";
}

echo "</table>";
$conn->close();
