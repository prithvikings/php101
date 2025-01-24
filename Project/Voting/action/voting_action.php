<?php
session_start();

if (!isset($_SESSION['data'])) {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['group_id'])) {
    $group_id = $_POST['group_id'];
    $user_id = $_SESSION['data']['id']; // Assuming you have user ID stored in session

    // Database connection
    $conn = new mysqli('localhost:3309', 'root', '', 'votingsystem');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update the user's voting status and record the vote
    $stmt = $conn->prepare("UPDATE users SET voted = 1 WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();

    // Update the group's vote count
    $stmt = $conn->prepare("UPDATE groups SET votes = votes + 1 WHERE id = ?");
    $stmt->bind_param("i", $group_id);
    $stmt->execute();

    // Close the database connection
    $stmt->close();
    $conn->close();

    // Update session status
    $_SESSION['status'] = 'voted';

    // Redirect back to the dashboard
    header("Location: ../pages/dashboard.php");
    exit();
}
