<?php
session_start();
include('connect.php');

if (!isset($_SESSION['user_id'])) {
    echo json_encode([]);
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM tasks WHERE user_id = '$user_id' ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

$tasks = [];
while ($row = mysqli_fetch_assoc($result)) {
    $tasks[] = [
        'id' => $row['id'],
        'text' => $row['task_text'],
        'time' => $row['task_time'],
        'priority' => $row['task_priority'],
        'category' => $row['task_category'],
        'completed' => (bool)$row['completed']
    ];
}

echo json_encode($tasks);
?>