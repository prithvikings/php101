<?php
session_start();
include('../actions/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user from the database
    $sql = "SELECT * FROM user_register WHERE user_name = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Store user information in the session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['email'] = $user['email'];

            // Redirect to dashboard
            header("Location: ../src/dashboard.php");
            exit();
        } else {
            echo '<script>alert("Invalid Password"); window.location.href="../src/login.php";</script>';
        }
    } else {
        echo '<script>alert("Invalid Username"); window.location.href="../src/login.php";</script>';
    }
}
?>