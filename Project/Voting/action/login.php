<?php
include 'connect.php';

// Retrieve POST data
$username = $_POST['username'];
$phone = $_POST['phonenumber'];
$password = $_POST['password'];
$std = $_POST['std'];

// Query to fetch user data
$sql = "SELECT * FROM users WHERE username = '$username' AND phone = '$phone' AND std = '$std'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Fetch the user's data
    $row = mysqli_fetch_assoc($result);
    
    // Verify the hashed password
    if (password_verify($password, $row['password'])) {
        echo '<script>alert("Login Successful"); window.location.href="../Pages/vote.php";</script>';
    } else {
        echo '<script>alert("Invalid Password"); window.location.href="../index.php";</script>';
    }
} else {
    echo '<script>alert("Login Failed"); window.location.href="../index.php";</script>';
}
?>
