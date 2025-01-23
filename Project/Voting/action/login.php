<?php
include 'connect.php';

// Retrieve POST data
$username = $_POST['username'];
$phone = $_POST['phonenumber'];
$password = $_POST['password'];
$std = $_POST['std'];

// Debugging with var_dump
var_dump($username, $phone, $password, $std);

// Stop execution temporarily to inspect the output
die();

$sql = "SELECT * FROM users WHERE username='$username' AND phone='$phone' AND password='$password' AND std='$std'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<script>alert("Login Successful"); window.location.href="../Pages/vote.php";</script>';
} else {
    echo '<script>alert("Login Failed"); window.location.href="../index.php";</script>';
}
?>
