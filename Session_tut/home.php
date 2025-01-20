<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <p>This is the home page</p>
    <a href="index.php">Login <br></a>
    
    <!-- Wrap the logout button in a form -->
    <form method="post">
        <input type="submit" value="Logout" name="logout">
    </form>
</body>
</html>

<?php
// Display the username if set in the session
if (isset($_SESSION['username'])) {
    echo "Welcome {$_SESSION['username']} <br>";
}

// Handle logout request
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit(); // Ensure no further code is executed after the redirect
}
?>
