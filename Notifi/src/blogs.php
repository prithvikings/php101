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
  <body>
    <main class="bg-zinc-900 w-full flex flex-col items-center justify-start text-white">
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
            <a href="./index.php" class="cursor-pointer no-underline hover:text-[#e0614a]">Home</a>
            <a href="./blogs.php" class="cursor-pointer no-underline text-[#e0614a]">Blogs</a>
            <a class="cursor-pointer no-underline hover:text-[#e0614a]" href="./extension.php">Extension</a>
            <a class="cursor-pointer no-underline hover:text-[#e0614a]" href="#">Features</a>
            <a href="./about.php" class="cursor-pointer no-underline hover:text-[#e0614a]">About</a>
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
          <a href="./blogs.php" class="text-[#e0614a] cursor-pointer py-2">Blogs</a>
          <a href="./extension.php" class="text-white hover:text-[#e0614a] cursor-pointer py-2">Extension</a>
          <a href="#" class="text-white hover:text-[#e0614a] cursor-pointer py-2">Features</a>
          <a href="./about.php" class="text-white hover:text-[#e0614a] cursor-pointer py-2">About</a>
          <a href="./login.php" class="mt-2 no-underline rounded-full border-none px-6 py-2 flex items-center justify-center bg-[#e0614a] hover:bg-[#c95844] text-white font-semibold cursor-pointer transition-colors duration-300 ease-in-out">
            Login
          </a>
        </div>
      </div>

      <!-- Blogs Section -->
      <section class="w-full flex flex-col items-center justify-center gap-4 sm:gap-6 md:gap-8 bg-zinc-100 p-4 sm:p-6 md:p-8">
        <div class="rounded-md bg-[#d4d4d8] p-6 sm:p-8 md:p-10 lg:p-12 xl:p-16 w-full flex flex-col gap-4 sm:gap-6 md:gap-8 lg:gap-10 xl:gap-12 h-full text-zinc-700 blog-section">
          <div>
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-normal">Blogs</h1>
          </div>
          <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 md:gap-8 ">
            <!-- Blog Card 1 -->
            <div class="blog-card rounded-lg flex flex-col items-start justify-start text-start w-full sm:w-1/2 md:w-1/3 lg:w-1/4 bg-zinc-100 gap-3 sm:gap-4 p-2 cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out">
              <img
                src="https://courses-old.ankurwarikoo.com/wp-content/uploads/2025/02/MWYC.png"
                alt=""
                class="object-cover w-full h-auto rounded-lg"
              />
              <h1 class="text-lg sm:text-xl font-medium tracking-normal mt-1 sm:mt-2">
                Make Writing Your Career
              </h1>
              <div class="border-b-2 border-zinc-300 w-full mt-1 sm:mt-2"></div>
              <div class="flex capitalize justify-between w-full text-sm sm:text-base">
                <p class="font-semibold text-zinc-800">Prithvi</p>
                <p class="text-zinc-800 font-extralight">
                  Mar 18, 2025
                </p>
              </div>
            </div>
            
            <!-- Blog Card 2 -->
            <div class="blog-card rounded-lg flex flex-col items-start justify-start text-start w-full sm:w-1/2 md:w-1/3 lg:w-1/4 bg-zinc-100 gap-3 sm:gap-4 p-2 cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out">
              <img
                src="https://courses-old.ankurwarikoo.com/wp-content/uploads/2025/02/TUGTEC.png"
                alt=""
                class="object-cover w-full h-auto rounded-lg"
              />
              <h1 class="text-lg sm:text-xl font-medium tracking-normal mt-1 sm:mt-2">
                The Ultimate Guide To Effective Communication
              </h1>
              <div class="border-b-2 border-zinc-300 w-full mt-1 sm:mt-2"></div>
              <div class="flex capitalize justify-between w-full text-sm sm:text-base">
                <p class="font-semibold text-zinc-800">Prithvi</p>
                <p class="text-zinc-800 font-extralight">
                  Mar 18, 2025
                </p>
              </div>
            </div>

            <!-- Blog Card 3 -->
            <div class="blog-card rounded-lg flex flex-col items-start justify-start text-start w-full sm:w-1/2 md:w-1/3 lg:w-1/4 bg-zinc-100 gap-3 sm:gap-4 p-2 cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out">
              <img
                src="https://courses-old.ankurwarikoo.com/wp-content/uploads/2025/02/TMFS.png"
                alt=""
                class="object-cover w-full h-auto rounded-lg"
              />
              <h1 class="text-lg sm:text-xl font-medium tracking-normal mt-1 sm:mt-2">
                Time Management For Students
              </h1>
              <div class="border-b-2 border-zinc-300 w-full mt-1 sm:mt-2"></div>
              <div class="flex capitalize justify-between w-full text-sm sm:text-base">
                <p class="font-semibold text-zinc-800">Prithvi</p>
                <p class="text-zinc-800 font-extralight">
                  Mar 18, 2025
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Newsletter Section -->
      <section class="newsletter w-full flex bg-[#ffffff] text-black items-center justify-center">
        <div class="w-full bg-gray-200 py-8 sm:py-10 md:py-12 lg:py-16 xl:py-24 px-4 sm:px-6 md:px-8 lg:px-16 xl:px-32">
          <div class="container mx-auto flex flex-col md:flex-row items-start justify-start md:justify-between md:items-center gap-4 sm:gap-6">
            <div class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold text-gray-800">
              Subscribe to learn about our latest news
            </div>
            <form action="../actions/sent.php" method="post" class="flex items-start w-full md:w-auto mt-2 sm:mt-4">
              <input type="email" name="email" placeholder="Enter your email"
                class="border-b border-gray-400 py-1 w-full sm:w-64 focus:outline-none placeholder-gray-500 pl-0 text-sm sm:text-base">
              <button type="submit" class="ml-2 text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M14 5l7 7m0 0l-7 7M4 12H21" />
                </svg>
              </button>
            </form>
          </div>
          <?php
          if (isset($_GET['subscription']) && $_GET['subscription'] === 'success') {
            echo '<p style="color: green;" class="text-sm sm:text-base md:text-lg font-light mt-2 sm:mt-4">Thank you for subscribing! A confirmation email has been sent.</p>';
          }
          ?>
        </div>
      </section>

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
      tl.from(".blog-card",{
        duration:1,
        opacity:0,
        stagger:0.2,
        delay:0.5,
        ease:"power3.out",
      })
     
    </script>
  </body>
</html>