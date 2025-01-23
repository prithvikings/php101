<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0%;
      padding: 0%;
      box-sizing: border-box;
    }
    html, body {
      height: 100%;
      width: 100%;
    }
    
  </style>
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 text-white ">
 
  <div class="p-1">
    <h1 class="text-center text-4xl font-bold font-[poppins] font-weight-[700] p-5 pt-10">Voting System</h1> 
    <div class="mb-3 w-[30%] mx-auto gap-5 bg-gray-900 p-10 py-1 rounded-lg ">
      <h2 class="text-center text-2xl font-bold mt-10">
        Login
      </h2>
      <form action="./action/login.php" method="POST">  
        <div class="">
          
          <label for="username" class="block text-l font-medium ">Username</label>
          <input type="text" name="username" id="username" placeholder="Username"  required class="w-full p-2 rounded-lg bg-gray-700 text-white border-none focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 w-[80%] mx-auto mt-5">

          <label for="phonenumber" class="block text-l font-medium mt-5 ">Phone Number</label>
          <input type="text" name="phonenumber" id="phonenumber" maxlength="10" minlength="10" required placeholder="Enter Your Phone Number" class="w-full p-2 rounded-lg bg-gray-700 text-white border-none focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 w-[80%] mx-auto mt-5">

          <label for="password" class="block text-l font-medium mt-5">Password</label>
          <input type="password" name="password" id="password" placeholder="Password" required class="w-full p-2 rounded-lg bg-gray-700 text-white border-none focus:outline-none focus:ring-2 focus:ring-blue-600
          focus:ring-opacity-50 w-[80%] mx-auto mt-5">

          <label for="group-voter" class="block text-l font-medium mt-5">Who You are? </label>
          <select class="w-full p-2 rounded-lg bg-gray-700 mt-5  outline-none border-none hover:cursor-pointer focus:ring-blue-600 focus:ring-2 focus:ring-opacity-50"  name="std" id="group-voter">
            <option value="voter" >Voter</option>
            <option value="group" selected>Group</option>
          </select>
          
          <div class="flex align-center justify-center">
            <button type="submit" class=" rounded-lg bg-blue-600 text-white px-8 py-2 border-none flex  align-center justify-center focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50   mt-5 hover:bg-blue-700">Login</button>
          </div>
          <a href="./Pages/registration.php" class="mb-3 mt-5 mx-auto flex justify-center align-center gap-5 text-center text-blue-500  hover:text-blue-700 ">Don't have an account? Register</a>
        </div>
        
      </form>
    </div>
  </div> 
</body>
</html>
