<?php
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      @theme {
        --color-clifford: #da373d;
      }
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <main class="bg-zinc-300 w-full flex flex-col items-center justify-start text-white font-[mulish]">
        <nav
        class="w-full flex justify-between items-center px-4 py-4 md:px-32 md:py-5 bg-zinc-900"
      >
        <div class="logo">
          <h1 class="text-3xl md:text-4xl font-[mulish] leading-none tracking-[4px]">
            Notifi
          </h1>
        </div>
        <div
          class="text hidden md:flex items-center gap-8 text-lg font-normal font-[gilroy]"
        >
          <a class=" cursor-pointer hover:text-[#e0614a]" href="./index.php">Home</a>
          <a class="cursor-pointer no-underline hover:text-[#e0614a]" href="./blogs.php">Blogs</a>
          <h1 class="cursor-pointer hover:text-[#e0614a]">Extension</h1>
          <h1 class="cursor-pointer hover:text-[#e0614a]">Features</h1>
          <h1 class="cursor-pointer text-[#e0614a]">About</h1>
        </div>
        <div class="btn">
          <a
          href="./login.php"
            class="no-underline rounded-full border-none px-8 py-2 md:px-10 md:py-2 flex items-center justify-center bg-[#e0614a] hover:bg-[#c95844]  text-white font-semibold cursor-pointer transition-colors duration-300 ease-in-out"
          >
            Login
        </a>
        </div>
      </nav>
        <div class="w-full flex flex-col items-start px-12 py-9 md:px-36 md:py-18">
            <h1 class="text-3xl md:text-6xl font-semibold text-zinc-800 ">About</h1>
            <p class="text-zinc-800 w-sm md:w-3xl text-md md:text-xl tracking-wider mt-5">Welcome to <span class="text-black font-semibold italic">Notifi</span>, your ultimate companion for staying organized, on time, and stress-free!

                We know how easy it is to forget important tasks, miss deadlines, or let reminders pile up. That’s why we created a smart, intuitive, and hassle-free way to manage your schedule. Whether it’s setting alarms for daily routines, planning future tasks, or getting timely notifications—we make sure you never miss a beat.</p>
        </div>

        <div class="w-full flex flex-col items-start px-12 pb-9  md:px-36 md:pb-18">
            <h1 class="text-3xl md:text-6xl font-semibold text-zinc-800">Why Choose Us?</h1>
            <div class="flex items-center gap-5 mt-5">
                <img class="w-8 h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
            <h3 class="text-lg md:text-xl font-semibold text-zinc-700 mb-1 mt-2 tracking-wide"><span class="font-bold text-zinc-900">Smart Scheduling</span> – Get reminders exactly when you need them.</h3>
            </div>
            <div class="flex items-center gap-5 mt-2">
                <img class="w-8 h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
            <h3 class="text-lg md:text-xl font-semibold text-zinc-700 mb-1 mt-2 tracking-wide"><span class="font-bold text-zinc-900">Simple & Intuitive</span> – No complicated setup, just effortless task management.</h3>
            </div>
            <div class="flex items-center gap-5 mt-2">
                <img class="w-8 h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
            <h3 class="text-lg md:text-xl font-semibold text-zinc-700 mb-1 mt-2 tracking-wide"><span class="font-bold text-zinc-900">Custom Alerts</span> – Choose how and when you want to be reminded.</h3>
            </div>
            <div class="flex items-center gap-5 mt-2">
                <img class="w-8 h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
            <h3 class="text-lg md:text-xl font-semibold text-zinc-700 mb-1 mt-2 tracking-wide"><span class="font-bold text-zinc-900">Secure & Reliable</span> – Your data stays private, and your tasks stay safe.</h3>
            </div>
        </div>
        <div class="w-full flex flex-col items-start px-12 py-9  md:px-36 md:pb-18">
            <h1 class="font-semibold text-lg md:text-xl text-zinc-800">At <span class="font-bold text-zinc-900 italic">Notifi</span>, we don’t just help you remember tasks—we help you stay ahead.</h1>
        </div>


        <footer class="bg-[#18181B] text-white px-4 pb-2 pt-12 md:pt-12 md:pb-2 md:px-4 w-full">
            <div class=" flex justify-around">
          
              <div class="flex flex-col">
                <h3 class="text-sm md:text-lg font-semibold mb-4">GET BETTER VERSION OF YOURS</h3>
                <a href="#" class="mb-2 hover:text-gray-300">ABOUT</a>
                <a href="#" class="mb-2 hover:text-gray-300">PARTNER WITH US</a>
                <a href="#" class="mb-2 hover:text-gray-300">BLOGS</a>
                <a href="#" class="hover:text-gray-300">EXTENSION</a>
              </div>
          
              <div class="flex flex-col">
                <h3 class="text-lg font-semibold mb-2 md:mb-4">Contact</h3>
                <p class="mb-2">Email: <a href="mailto:notifi@gmail.com" class="hover:text-gray-300">support@notifi.in</a></p>
                <p class="mb-2">Location: Phagwara, India</p>
                <p>Contact no: +91-7672812803</p>
              </div>
            </div>
            
            <div class="flex space-x-4 text-2xl items-center justify-center">
                <a href="#" class="hover:text-gray-300">
                    <i class="ri-pinterest-fill text-xl"></i>
                </a>
                <a href="#" class="hover:text-gray-300 text-2xl">
                    <i class="ri-twitter-fill text-2xl"></i>
                </a>
                <a href="#" class="hover:text-gray-300">
                    <i class="ri-facebook-circle-fill text-xl"></i>
                </a>
                <a href="#" class="hover:text-gray-300">
                    <i class="ri-youtube-fill text-xl"></i>
                </a>
              </div>
       
          <div class="w-full border-b-[0.2px] b-zinc-900"></div>
            <div class=" mt-4 md:mt-8 flex flex-col md:flex-row justify-center items-center md:justify-around md:items-center gap-8 md:gap-0 relative">
              <div class="flex space-x-4">
                <a href="#" class="hover:text-gray-300">Terms of use</a>
                <span>|</span>
                <a href="#" class="hover:text-gray-300">Privacy policy</a>
              </div>
          
          
              <div class="flex items-center absolute left-[50%] transform translate-x-[-50%]">
                <p class="mr-2">Proudly Backed by</p>
                <img src="../assets/lpu-logo-01-removebg-preview.png" alt="Lpu" class="h-6">
              </div>
          
              <p class="text-sm">© Notifi Technologies Pvt. Ltd, all rights reserved.</p>
            </div>
          </footer>
    </main>
  </body>
</html>
