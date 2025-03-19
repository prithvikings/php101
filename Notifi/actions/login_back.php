<?php
session_start();
include 'connect.php';

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Retrieve POST data and sanitize input
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = $_POST['password']; // Do not escape password

// Query to fetch user data from user_register table
$sql = "SELECT * FROM user_register WHERE user_name = '$username'"; // Corrected column name
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Fetch group data
        $sql = "SELECT user_name, regname,email FROM `user_register`"; // Corrected column name
        $resultgroup = mysqli_query($conn, $sql);
        if (mysqli_num_rows($resultgroup) > 0) {
            $groups = mysqli_fetch_all($resultgroup, MYSQLI_ASSOC);
            $_SESSION['group'] = $groups; // Consistent session key
        } else {
            $_SESSION['group'] = []; // Default empty array
        }

        $_SESSION['id'] = $row['id'];
        $_SESSION['data'] = $row;
        $_SESSION['username'] = $row['user_name']; // Store username in session. corrected column name.

        // Redirect to the dashboard
        echo '<script>alert("Login Successful"); window.location.href="../src/dashboard.php";</script>';
    } else {
        echo '<script>alert("Invalid Password"); window.location.href="../index.php";</script>';
    }
} else {
    echo '<script>alert("Login Failed. Username not found."); window.location.href="../index.php";</script>';
}

mysqli_close($conn); // Close the connection

?>