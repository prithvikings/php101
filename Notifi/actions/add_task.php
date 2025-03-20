<?php
session_start();
include('connect.php');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

$user_id = $_SESSION['user_id'];
$task_text = $_POST['task_text'];
$task_time = $_POST['task_time'];
$task_priority = $_POST['task_priority'];
$task_category = $_POST['task_category'];

if (empty($task_text) || empty($task_time) || empty($task_priority) || empty($task_category)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit();
}

$sql = "INSERT INTO tasks (user_id, task_text, task_time, task_priority, task_category) 
        VALUES ('$user_id', '$task_text', '$task_time', '$task_priority', '$task_category')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(['success' => true, 'id' => mysqli_insert_id($conn)]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to add task']);
}
?>