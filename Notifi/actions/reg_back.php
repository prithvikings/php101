<?php
include('connect.php');


$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO user_register (regname, user_name, email, password) VALUES ('$name', '$username', '$email', '$hashed_password')";


// Execute query
$result = mysqli_query($conn, $sql);

if ($result) {
    echo '<script>alert("Registration Successful"); window.location.href="../src/intro.php";</script>';
} else {
    echo '<script>alert("Registration Failed"); window.location.href="../src/signup.php";</script>';
}

?>