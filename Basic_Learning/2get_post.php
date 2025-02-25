<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
</head>
<body>
    <form action="2get_post.php" method="post">
        <label >UserName: </label>
        <input type="text" name="username" placeholder="Enter your username"><br>
        <label >Password: </label>
        <input placeholder="Enter you password" type="text" name="password"><br>
        <input type="submit" value="Submit">
    
    </form>
</body>
</html>

<?php
/*
$_GET, $_POST = special variables use to collect from an HTML form data is sent to the file int he action attribute of <form> <form action="some_file.php" method="get">

$_GET = Data is appended to the URL 
-Not secure
-Char limit
-Bookmark is possible w/ values
-GET requests can be cached
-Better for a search page

$_POST = Data is a packaged inside the body of the HTTP request
-More secure
-No data limit
-No bookmark
-POST requests are not cached
-Better for sensitive data

//in get method, the data is sent through the URL and can be seen in the URL bar of the browser while in post method, the data is sent through the body of the HTTP request and cannot be seen in the URL bar of the browser.
*/
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = isset($_POST['username']) ? $_POST['username'] : '';
//     $password = isset($_POST['password']) ? $_POST['password'] : '';

//     if (!empty($username) && !empty($password)) {
//         echo "Data received successfully <br>";
//         echo "Username: $username <br>";
//         echo "Password: $password <br>";
//     } else {
//         echo "Please enter both username and password.";
//     }
// }
echo "{$_POST['username']} <br>";
echo "{$_POST['password']} <br>";
?>