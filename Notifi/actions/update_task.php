<?php
session_start();
include('connect.php');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

$task_id = $_POST['task_id'];
$task_text = $_POST['task_text'] ?? null;
$task_time = $_POST['task_time'] ?? null;
$task_priority = $_POST['task_priority'] ?? null;
$task_category = $_POST['task_category'] ?? null;
$completed = $_POST['completed'] ?? null;

if ($task_text !== null) {
    $sql = "UPDATE tasks SET task_text = '$task_text' WHERE id = '$task_id' AND user_id = '{$_SESSION['user_id']}'";
} elseif ($task_time !== null) {
    $sql = "UPDATE tasks SET task_time = '$task_time' WHERE id = '$task_id' AND user_id = '{$_SESSION['user_id']}'";
} elseif ($task_priority !== null) {
    $sql = "UPDATE tasks SET task_priority = '$task_priority' WHERE id = '$task_id' AND user_id = '{$_SESSION['user_id']}'";
} elseif ($task_category !== null) {
    $sql = "UPDATE tasks SET task_category = '$task_category' WHERE id = '$task_id' AND user_id = '{$_SESSION['user_id']}'";
} elseif ($completed !== null) {
    $sql = "UPDATE tasks SET completed = '$completed' WHERE id = '$task_id' AND user_id = '{$_SESSION['user_id']}'";
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit();
}

if (mysqli_query($conn, $sql)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to update task']);
}
?>