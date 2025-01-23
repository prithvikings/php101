<?php
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cnf_password'];
    $phone = $_POST['phonenumber'];
    $std = $_POST['std'];
    $image= $_FILES['photo']['name'];
    $image_path = $_FILES['photo']['tmp_name'];
    
    
    // Validate password match
    if ($password != $cpassword) {
        echo '<script>alert("Password and Confirm Password do not match"); window.location.href="../Pages/registration.php";</script>';
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // // File upload handling
    // if ($_FILES['photo']['error'] == 0) {
    //     $image = $_FILES['photo']['name'];
    //     $temp_name = $_FILES['photo']['tmp_name'];
    //     $image_path = "../Images/" . $image;
    //     move_uploaded_file($temp_name, $image_path);
    // } else {
    //     echo '<script>alert("Error uploading file!"); window.location.href="../Pages/registration.php";</script>';
    //     exit;
    // }

    // Prepare SQL query
    $sql = "INSERT INTO `users` (`username`, `password`, `phone`, `image`, `std`, `votes`, `status`) 
            VALUES ('$username', '$hashed_password', '$phone', '$image', '$std', 0, 0)";

    // Execute query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("Registration Successful"); window.location.href="../index.php";</script>';
    } else {
        echo '<script>alert("Registration Failed"); window.location.href="../Pages/registration.php";</script>';
    }
}
?>
