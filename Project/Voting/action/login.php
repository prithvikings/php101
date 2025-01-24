<?php

session_start();
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
        $sql="select username,image,votes,id from `users`where std='group'";  
        $resultgroup = mysqli_query($conn, $sql);
        if(mysqli_num_rows($resultgroup) > 0){
            $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
            $_SESSION['groups']=$groups;    
        }
        $data=mysqli_fetch_array($result);
        $_SESSION['status'] = $data['status'];
        $_SESSION['id'] = $data['id'];
        $_SESSION['data'] = $data;

        echo '<script>alert("Login Successful"); window.location.href="../Pages/dashboard.php";</script>';

    } else {
        echo '<script>alert("Invalid Password"); window.location.href="../index.php";</script>';
    }
} else {
    echo '<script>alert("Login Failed"); window.location.href="../index.php";</script>';
}
?>

$src="./pages/dashboard.php";
