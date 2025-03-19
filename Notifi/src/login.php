<?php
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
            <div class="img w-3/5 bg-sky-500 h-full">
                <img src="../assets/login_bg_pattern_3.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <div class="container-div w-full bg-zinc-300 h-full flex items-center justify-start px-32 relative">
            <a href="./index.php" class="absolute text-3xl text-black top-8 right-10">
            <i class="ri-close-line"></i>
            </a>
                <div class="bg-white p-12 rounded-md w-96 flex flex-col gap-4 text-gray-700">
                    <div class="w-full flex items-center relative">
                        <h2 class="text-xl font-semibold font-[gilroy] text-gray-800 mb-4">
                            Welcome back! Your tasks missed you.
                        </h2>
                        <img src="https://em-content.zobj.net/source/apple/391/smiling-face-with-sunglasses_1f60e.png" alt="" class="w-7 h-7 absolute left-28 top-[60%] transform -translate-y-1/2">
                    </div>
                    <form class="space-y-4 relative">
                        <img src="https://em-content.zobj.net/source/apple/391/technologist-light-skin-tone_1f9d1-1f3fb-200d-1f4bb.png" alt="" class="absolute w-7 h-7 left-[-35px] top-[10%] transform -translate-y-1/2">
                        <input type="text" placeholder="Username" class="w-full p-3 bg-gray-100 outline-none focus:ring-2 focus:ring-zinc-400">
                        <img src="https://em-content.zobj.net/source/apple/391/zipper-mouth-face_1f910.png" alt="" class="absolute w-7 h-7 left-[-35px] top-[42%] transform -translate-y-1/2">
                        <input type="password" placeholder="Password" class="w-full p-3  bg-gray-100 outline-none focus:ring-2 focus:ring-zinc-400">
                        
                        <div class="flex items-center">
                                <a href="#" class="text-sm hover:text-zinc-500 font-medium">Forget Password</a>
                        </div>
            
                        <button type="submit" class="w-full bg-gray-500 text-white p-3  hover:bg-gray-600 cursor-pointer">
                            Login
                        </button>
                    </form>
                    <a class="text-center cursor-pointer text-sm hover:text-zinc-500 font-medium" href="./signup.php">Sign Up</a>
                </div>
            </div>
        </div>
    </main>
  </body>
</html>
