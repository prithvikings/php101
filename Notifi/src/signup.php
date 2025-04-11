<?php
session_start();
include('../actions/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert user into the database
    $sql = "INSERT INTO user_register (regname, user_name, email, password) VALUES ('$name', '$username', '$email', '$password')";

    // Execute query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Store the user's ID in the session
        $_SESSION['user_id'] = mysqli_insert_id($conn);
        echo '<script>alert("Registration Successful"); window.location.href="../src/intro.php";</script>';
    } else {
        echo '<script>alert("Registration Failed"); window.location.href="../src/signup.php";</script>';
    }
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <main class="bg-zinc-900 w-full min-h-screen text-white font-[mulish]">
        <div class="w-full bg-zinc-300 flex justify-between items-center h-screen ">
            <div class="img w-0 md:w-3/5 bg-sky-500 h-full">
                <img src="../assets/login_bg_pattern_2.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <div class="container-div w-full bg-zinc-300 h-full flex items-center justify-start px-6 py-12 md:py-0 md:px-32 relative">
                <a href="./index.php" class=" text-3xl text-black absolute top-2 right-4 md:top-8 md:right-10">
                    <i class="ri-close-line"></i>
                </a>
                <div class="bg-white mt-12 md:mt-0 p-8 pl-10 md:p-12 md:pl-16 rounded-md w-2xl md:w-xl flex flex-col gap-4 text-gray-700">
                    <div class="w-full flex items-center relative">
                        <h2 class="text-xl font-semibold font-[gilroy] text-gray-800 mb-4 reg-elem ">
                            One step closer to an organized life—get started!
                        </h2>
                    </div>
                    <form class="space-y-4 relative reg-elem" action="./signup.php" method="POST">
                        <img src="https://em-content.zobj.net/source/apple/391/waving-hand_1f44b.png" alt="" class=" w-6 h-6 absolute left-[-35px] top-[12%] transform -translate-y-1/2">
                        <label for="" >What’s your good name?</label>
                        <input type="text" name="name" placeholder="John Doe" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
                        <img src="https://em-content.zobj.net/source/apple/391/rocket_1f680.png" alt="" class="w-6 h-6 absolute left-[-35px] top-[34%] transform -translate-y-1/2">
                        <label for="">Pick a cool username</label>
                        <input type="text" name="username" placeholder="Username" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
                        <img src="https://em-content.zobj.net/source/apple/391/envelope-with-arrow_1f4e9.png" alt="" class="w-6 h-6 absolute left-[-35px] top-[52%] transform -translate-y-1/2">
                        <label for="">Drop your best email</label>
                        <input type="email" name="email" placeholder="Email" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
                        <img src="https://em-content.zobj.net/source/apple/391/locked_1f512.png" class="w-6 h-6 absolute left-[-35px] top-[74%] transform -translate-y-1/2" alt="">
                        <label for="">Set a strong password</label>
                        <input type="password" name="password" placeholder="••••••••" class="w-full p-3 mt-2  bg-gray-200 outline-none focus:ring-2 focus:ring-zinc-400">
                        
                        <div class="flex items-center reg-elem">
                                <a href="#" class="text-sm hover:text-zinc-500 font-medium">Forget Password</a>
                        </div>
            
                        <button type="submit"  class="w-full bg-gray-500 text-white p-3  hover:bg-gray-600 cursor-pointer reg-elem">
                            Sign Up
                        </button>
                    </form>
                    <a class="text-center cursor-pointer text-sm hover:text-zinc-500 font-medium reg-elem" href="./login.php">Login</a>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    //GSAP Animations
    let tl=gsap.timeline();

tl.from(".reg-elem",{
    duration:0.7,
    opacity:0,
    ease:"power1.out",
    delay:0.1,
    stagger:0.2,
})
</script>
  </body>
</html>
