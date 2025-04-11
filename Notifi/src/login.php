<?php
session_start();
include('../actions/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user from the database
    $sql = "SELECT * FROM user_register WHERE user_name = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Store user information in the session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['email'] = $user['email'];

            // Redirect to dashboard
            header("Location: ../src/dashboard.php");
            exit();
        } else {
            echo '<script>alert("Invalid Password"); window.location.href="../src/login.php";</script>';
        }
    } else {
        echo '<script>alert("Invalid Username"); window.location.href="../src/login.php";</script>';
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
        <div class="w-full bg-amber-400 flex justify-between items-center h-screen">
            <div class="img w-0 md:w-3/5 bg-sky-500 h-full hidden md:block">
                <img src="../assets/login_bg_pattern_3.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <div class="container-div w-full bg-zinc-300 h-full flex items-center justify-start px-16 md:px-32 relative">
            <a href="./index.php" class="absolute text-2xl md:text-3xl text-black top-8 right-10">
            <i class="ri-close-line"></i>
            </a>
                <div class="bg-white p-12 md:p-12 rounded-md w-screen md:w-96 flex flex-col shadow-lg shadow-gray-400 gap-4 text-gray-700 boxoflogin">
                    <div class="w-full flex items-center relative login-elem">
                        <h2 class="text-xl font-semibold font-[gilroy] text-gray-800 mb-4">
                            Welcome back! Your tasks missed you.
                        </h2>
                        <img src="https://em-content.zobj.net/source/apple/391/smiling-face-with-sunglasses_1f60e.png" alt="" class="w-7 h-7 absolute left-28 top-[60%] transform -translate-y-1/2">
                    </div>
                    <form class="space-y-4 relative login-elem" action="./login.php" method="POST">
                        <img src="https://em-content.zobj.net/source/apple/391/technologist-light-skin-tone_1f9d1-1f3fb-200d-1f4bb.png" alt="" class="absolute w-7 h-7 left-[-35px] top-[10%] transform -translate-y-1/2">
                        <input type="text" name="username" placeholder="Username" class="w-full p-3 bg-gray-100 outline-none focus:ring-2 focus:ring-zinc-400">
                        <img src="https://em-content.zobj.net/source/apple/391/zipper-mouth-face_1f910.png" alt="" class="absolute w-7 h-7 left-[-35px] top-[42%] transform -translate-y-1/2">
                        <input type="password" name="password" placeholder="Password" class="w-full p-3  bg-gray-100 outline-none focus:ring-2 focus:ring-zinc-400">
                        
                        <div class="flex items-center login-elem">
                                <a href="#" class="text-sm hover:text-zinc-500 font-medium">Forget Password</a>
                        </div>
            
                        <button type="submit" class="w-full bg-[#dd6c59] hover:bg-[#c95844]  text-white p-3 cursor-pointer login-elem">
                            Login
                        </button>
                    </form>
                    <a class="text-center cursor-pointer text-sm hover:text-zinc-500 font-medium" href="./signup.php">Sign Up</a>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    //GSAP Animations
    let tl=gsap.timeline();

tl.from(".login-elem",{
    duration:0.7,
    opacity:0,
    ease:"power1.out",
    delay:0.1,
    stagger:0.2,
})
</script>
  </body>
</html>
