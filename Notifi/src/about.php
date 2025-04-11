<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&display=swap');
      body {
        font-family: 'Mulish', sans-serif;
      }
    </style>
  </head>
  <body class="bg-zinc-300">
    <main class="w-full flex flex-col items-center justify-start text-white">
        <!-- Navigation -->
        <nav class="w-full flex justify-between items-center px-4 sm:px-6 md:px-8 lg:px-32 py-3 md:py-4 bg-zinc-900">
          <div class="logo">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-none tracking-[2px] sm:tracking-[4px]">
              Notifi
            </h1>
          </div>
          
          <!-- Mobile Menu Button -->
          <button id="mobile-menu-button" class="md:hidden text-2xl">
            <i class="ri-menu-line"></i>
          </button>
          
          <div id="menu" class="hidden md:flex items-center gap-4 lg:gap-8">
            <div class="text flex flex-col md:flex-row items-center gap-4 lg:gap-8 text-base lg:text-lg font-normal">
              <a class="cursor-pointer hover:text-[#e0614a]" href="./index.php">Home</a>
              <a class="cursor-pointer no-underline hover:text-[#e0614a]" href="./blogs.php">Blogs</a>
              <a class="cursor-pointer hover:text-[#e0614a]" href="./extension.php">Extension</a>
              <a class="cursor-pointer hover:text-[#e0614a]" href="#features">Features</a>
              <a class="cursor-pointer text-[#e0614a]" href="./About.php">About</a>
            </div>
            <div class="btn">
              <a href="./login.php"
                class="no-underline rounded-full border-none px-4 sm:px-6 md:px-8 lg:px-10 py-1 sm:py-2 flex items-center justify-center bg-[#e0614a] hover:bg-[#c95844] text-white font-semibold cursor-pointer transition-colors duration-300 ease-in-out text-sm sm:text-base">
                Login
              </a>
            </div>
          </div>
        </nav>
        
        <!-- Mobile Menu (hidden by default) -->
        <div id="mobile-menu" class="hidden fixed top-16 left-0 right-0 bg-zinc-800 z-40 p-4 shadow-lg">
          <div class="flex flex-col gap-4">
            <a href="./index.php" class="text-white hover:text-[#e0614a] cursor-pointer py-2">Home</a>
            <a href="./blogs.php" class="text-white hover:text-[#e0614a] cursor-pointer no-underline py-2">Blogs</a>
            <a href="./extension.php" class="text-white hover:text-[#e0614a] cursor-pointer py-2">Extension</a>
            <a href="#features" class="text-white hover:text-[#e0614a] cursor-pointer py-2">Features</a>
            <a href="./About.php" class="text-[#e0614a] cursor-pointer py-2">About</a>
            <a href="./login.php" class="mt-2 no-underline rounded-full border-none px-6 py-2 flex items-center justify-center bg-[#e0614a] hover:bg-[#c95844] text-white font-semibold cursor-pointer transition-colors duration-300 ease-in-out">
              Login
            </a>
          </div>
        </div>

        <!-- About Content -->
        <div class="w-full flex flex-col items-start px-4 sm:px-6 md:px-8 lg:px-12 xl:px-36 py-6 sm:py-9 md:py-12 lg:py-18 about-section">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-semibold text-zinc-800">About</h1>
            <p class="text-zinc-800 w-full sm:w-4/5 md:w-3/4 lg:w-2/3 text-sm sm:text-base md:text-lg lg:text-xl tracking-wider mt-3 sm:mt-4 md:mt-5">
                Welcome to <span class="text-black font-semibold italic">Notifi</span>, your ultimate companion for staying organized, on time, and stress-free!
                We know how easy it is to forget important tasks, miss deadlines, or let reminders pile up. That's why we created a smart, intuitive, and hassle-free way to manage your schedule. Whether it's setting alarms for daily routines, planning future tasks, or getting timely notifications—we make sure you never miss a beat.
            </p>
        </div>

        <!-- Why Choose Us Section -->
        <div class="w-full flex flex-col items-start px-4 sm:px-6 md:px-8 lg:px-12 xl:px-36 pb-6 sm:pb-9 md:pb-12 lg:pb-18 choose-section">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-semibold text-zinc-800">Why Choose Us?</h1>
            
            <div class="flex items-center gap-3 sm:gap-4 md:gap-5 mt-3 sm:mt-4 md:mt-5">
                <img class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
                <h3 class="text-sm sm:text-base md:text-lg lg:text-xl font-semibold text-zinc-700 tracking-wide">
                    <span class="font-bold text-zinc-900">Smart Scheduling</span> – Get reminders exactly when you need them.
                </h3>
            </div>
            
            <div class="flex items-center gap-3 sm:gap-4 md:gap-5 mt-2 sm:mt-3">
                <img class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
                <h3 class="text-sm sm:text-base md:text-lg lg:text-xl font-semibold text-zinc-700 tracking-wide">
                    <span class="font-bold text-zinc-900">Simple & Intuitive</span> – No complicated setup, just effortless task management.
                </h3>
            </div>
            
            <div class="flex items-center gap-3 sm:gap-4 md:gap-5 mt-2 sm:mt-3">
                <img class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
                <h3 class="text-sm sm:text-base md:text-lg lg:text-xl font-semibold text-zinc-700 tracking-wide">
                    <span class="font-bold text-zinc-900">Custom Alerts</span> – Choose how and when you want to be reminded.
                </h3>
            </div>
            
            <div class="flex items-center gap-3 sm:gap-4 md:gap-5 mt-2 sm:mt-3">
                <img class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
                <h3 class="text-sm sm:text-base md:text-lg lg:text-xl font-semibold text-zinc-700 tracking-wide">
                    <span class="font-bold text-zinc-900">Secure & Reliable</span> – Your data stays private, and your tasks stay safe.
                </h3>
            </div>
        </div>
        
        <!-- Final Statement -->
        <div class="w-full flex flex-col items-start px-4 sm:px-6 md:px-8 lg:px-12 xl:px-36 py-6 sm:py-9 md:py-12 lg:pb-18 final-section">
            <h1 class="font-semibold text-sm sm:text-base md:text-lg lg:text-xl text-zinc-800">
                At <span class="font-bold text-zinc-900 italic">Notifi</span>, we don't just help you remember tasks—we help you stay ahead.
            </h1>
        </div>

        <!-- Footer -->
        <footer class="bg-[#18181B] text-white px-4 sm:px-6 pb-2 pt-8 sm:pt-12 w-full">
          <div class="flex flex-col sm:flex-row justify-around gap-6 sm:gap-0">
            <div class="flex flex-col">
              <h3 class="text-xs sm:text-sm md:text-base lg:text-lg font-semibold mb-2 sm:mb-4">GET BETTER VERSION OF YOURS</h3>
              <a href="#" class="mb-1 sm:mb-2 hover:text-gray-300 text-xs sm:text-sm">ABOUT</a>
              <a href="#" class="mb-1 sm:mb-2 hover:text-gray-300 text-xs sm:text-sm">PARTNER WITH US</a>
              <a href="#" class="mb-1 sm:mb-2 hover:text-gray-300 text-xs sm:text-sm">BLOGS</a>
              <a href="#" class="hover:text-gray-300 text-xs sm:text-sm">EXTENSION</a>
            </div>
        
            <div class="flex flex-col mt-4 sm:mt-0">
              <h3 class="text-sm sm:text-base md:text-lg font-semibold mb-1 sm:mb-2 md:mb-4">Contact</h3>
              <p class="mb-1 sm:mb-2 text-xs sm:text-sm">Email: <a href="mailto:notifi@gmail.com" class="hover:text-gray-300">support@notifi.in</a></p>
              <p class="mb-1 sm:mb-2 text-xs sm:text-sm">Location: Phagwara, India</p>
              <p class="text-xs sm:text-sm">Contact no: +91-7672812803</p>
            </div>
          </div>
          
          <div class="flex space-x-4 text-xl sm:text-2xl items-center justify-center mt-6 sm:mt-8">
            <a href="#" class="hover:text-gray-300">
              <i class="ri-pinterest-fill text-lg sm:text-xl"></i>
            </a>
            <a href="#" class="hover:text-gray-300">
              <i class="ri-twitter-fill text-lg sm:text-xl"></i>
            </a>
            <a href="#" class="hover:text-gray-300">
              <i class="ri-facebook-circle-fill text-lg sm:text-xl"></i>
            </a>
            <a href="#" class="hover:text-gray-300">
              <i class="ri-youtube-fill text-lg sm:text-xl"></i>
            </a>
          </div>
          
          <div class="w-full border-b-[0.2px] border-zinc-900 mt-4 sm:mt-6"></div>
          
          <div class="flex flex-col sm:flex-row justify-center items-center sm:justify-around gap-4 sm:gap-0 mt-4 sm:mt-6 md:mt-8 relative">
            <div class="flex space-x-2 sm:space-x-4 text-xs sm:text-sm">
              <a href="#" class="hover:text-gray-300">Terms of use</a>
              <span>|</span>
              <a href="#" class="hover:text-gray-300">Privacy policy</a>
            </div>
        
            <div class="flex items-center sm:absolute left-[50%] transform sm:translate-x-[-50%] mt-4 sm:mt-0">
              <p class="mr-1 sm:mr-2 text-xs sm:text-sm">Proudly Backed by</p>
              <img src="../assets/lpu-logo-01-removebg-preview.png" alt="Lpu" class="h-4 sm:h-5 md:h-6">
            </div>
        
            <p class="text-xs sm:text-sm mt-4 sm:mt-0">© Notifi Technologies Pvt. Ltd, all rights reserved.</p>
          </div>
        </footer>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      // Mobile menu toggle
      const mobileMenuButton = document.getElementById('mobile-menu-button');
      const mobileMenu = document.getElementById('mobile-menu');
      
      mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
      });

      let tl=gsap.timeline();
      tl.from('.about-section',{
        duration:0.5,
        opacity:0,
        stagger:0.2,
        ease:'power3.out',
        delay:0.5
      })
      tl.from('.choose-section',{
        duration:0.5,
        opacity:0,
        stagger:0.2,
        ease:'power3.out',
        delay:0.5
      },'-=0.5')
      tl.from('.final-section',{
        duration:0.5,
        opacity:0,
        stagger:0.2,
        ease:'power3.out',
        delay:0.5
      },'-=0.5')
    </script>
  </body>
</html>