<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize and Validate</title>
</head>
<body>
    <!-- Form to collect user input -->
    <form action="" method="post">
        <input type="text" name="username" placeholder="Enter your username">
        <input type="text" name="age" placeholder="Enter your age">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Sanitize the username to remove special characters
    $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);

    // Validate the age as an integer
    $age = filter_var($_POST['age'], FILTER_VALIDATE_INT);

    // Validate the email format
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    // Display the sanitized and validated inputs with appropriate messages

    // Check if the username is empty
    if (empty($username)) {
        echo "Please enter your username.<br>";
    } else {
        echo "Your username is: $username<br>";
    }

    // Check if the age is valid
    if ($age === false) {
        echo "Please enter a valid age.<br>";
    } else {
        echo "Your age is: $age<br>";
    }

    // Check if the email is valid
    if ($email === false) {
        echo "Please enter a valid email.<br>";
    } else {
        echo "Your email is: $email<br>";
    }
}
?>
