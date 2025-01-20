<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php

if(isset($_POST['login'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        if($_SESSION['username'] == 'admin' && $_SESSION['password'] == 'admin'){
            echo 'You have successfully logged in';
            header('Location: home.php');
        }else{
            echo 'Invalid username or password';
        }
        
    }else{
        echo 'Please fill in the fields';
    }
}