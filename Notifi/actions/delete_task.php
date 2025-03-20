<?php
session_start();
include('connect.php');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

$task_id = $_POST['task_id'];
$sql = "DELETE FROM tasks WHERE id = '$task_id' AND user_id = '{$_SESSION['user_id']}'";

if (mysqli_query($conn, $sql)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to delete task']);
}
?>