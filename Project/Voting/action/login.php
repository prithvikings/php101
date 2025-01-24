<?php
session_start();
include 'connect.php';

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Retrieve POST data and sanitize input
$username = mysqli_real_escape_string($conn, $_POST['username']);
$phone = mysqli_real_escape_string($conn, $_POST['phonenumber']);
$password = $_POST['password']; // Do not escape password
$std = mysqli_real_escape_string($conn, $_POST['std']);

// Query to fetch user data
$sql = "SELECT * FROM users WHERE username = '$username' AND phone = '$phone' AND std = '$std'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
        // Fetch group data
        $sql = "SELECT username, image, votes, id FROM `users` WHERE std = 'group'";
        $resultgroup = mysqli_query($conn, $sql);
        if (mysqli_num_rows($resultgroup) > 0) {
            $groups = mysqli_fetch_all($resultgroup, MYSQLI_ASSOC);
            $_SESSION['group'] = $groups; // Consistent session key
        } else {
            $_SESSION['group'] = []; // Default empty array
        }

        $_SESSION['status'] = $row['status'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['data'] = $row;

        // Redirect to the dashboard
        echo '<script>alert("Login Successful"); window.location.href="../Pages/dashboard.php";</script>';
    } else {
        echo '<script>alert("Invalid Password"); window.location.href="../index.php";</script>';
    }
} else {
    echo '<script>alert("Login Failed"); window.location.href="../index.php";</script>';
}
?>
