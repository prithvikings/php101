<?php
// Perform any session handling or logout logic here
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-blue-500 mb-6">You have successfully logged out!</h1>
        <p class="text-gray-300 mb-8">Thank you for using our platform. We hope to see you again soon.</p>
        <a href="../" 
           class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition ease-in-out duration-300">
           Go to Login Page
        </a>
    </div>
</body>
</html>
