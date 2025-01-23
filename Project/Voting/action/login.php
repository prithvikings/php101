<?php
include 'connect.php';

$username=$POST['username'];
$phone=$POST['phonenumber'];
$password=$POST['password'];
$std=$POST['std'];


$sql="Select * from users where username='$username'
and phone='$phone'
and password='$password'
and std='$std'";
$result=mysqli_query($conn,$sql);




if (mysqli_num_rows($result)>0) {
    echo '<script>alert("loggin Successful");</script>';
} else {
    echo '<script>alert("Try Again for login"); window.location.href="../index.php";</script>';
}



?>