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
    <main
      class="bg-zinc-900 w-full flex flex-col items-center justify-start text-white font-[mulish]"
    >
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
          <a href="./index.php" class="cursor-pointer no-underline hover:text-[#e0614a]">Home</a>
          <a
            href="./blogs.php"
            class="cursor-pointer no-underline text-[#e0614a]"
            >Blogs</a
          >
          <a class="cursor-pointer no-underline hover:text-[#e0614a]" href="./extension.php">Extension</a>
          <a class="cursor-pointer no-underline hover:text-[#e0614a]" href="#">Features</a>
          <a href="./about.php" class="cursor-pointer no-underline hover:text-[#e0614a]">About</a>
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
      <section
        class="w-full flex flex-col items-center justify-center gap-8  bg-zinc-100 p-4"
      >
        <div
          class="rounded-md bg-[#d4d4d8] p-12 md:p-16 w-full flex flex-col gap-6 md:gap-12 h-full text-zinc-700"
        >
          <div><h1 class=" text-4xl md:text-5xl font-normal font-[gilroy]">Blogs</h1></div>
          <div class="flex flex-col md:flex-row gap-8">
            <div
              class="rounded-lg flex flex-col items-start justify-start text-start md:w-1/5 bg-zinc-100 gap-4 p-2 cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out"
            >
              <img
                src="https://courses-old.ankurwarikoo.com/wp-content/uploads/2025/02/MWYC.png"
                alt=""
                class="object-cover w-full h-full rounded-lg"
              />
              <h1 class="text-xl font-medium tracking-normal mt-2">
                Make Writing Your Career
              </h1>
              <div class="border-b-2 border-zinc-300 w-full mt-2"></div>
              <div class="flex capitalize justify-between w-full">
                <p class="font-semibold text-zinc-800">Prithvi</p>
                <p class="text-zinc-800 font-extralight font-[gilroy]">
                  Mar 18, 2025
                </p>
              </div>
            </div>
            <div
              class="rounded-lg flex flex-col items-start justify-start text-start md:w-1/5 bg-zinc-100 gap-4 p-2 cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out"
            >
              <img
                src="https://courses-old.ankurwarikoo.com/wp-content/uploads/2025/02/TUGTEC.png"
                alt=""
                class="object-cover w-full h-full rounded-lg"
              />
              <h1 class="text-xl font-medium tracking-normal mt-2">
                The Ultimate Guide
To Effective Communication
              </h1>
              <div class="border-b-2 border-zinc-300 w-full mt-2"></div>
              <div class="flex capitalize justify-between w-full">
                <p class="font-semibold text-zinc-800">Prithvi</p>
                <p class="text-zinc-800 font-extralight font-[gilroy]">
                  Mar 18, 2025
                </p>
              </div>
            </div>

            <div
              class="rounded-lg flex flex-col items-start justify-start text-start md:w-1/5 bg-zinc-100 gap-4 p-2 cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out"
            >
              <img
                src="https://courses-old.ankurwarikoo.com/wp-content/uploads/2025/02/TMFS.png"
                alt=""
                class="object-cover w-full h-full rounded-lg"
              />
              <h1 class="text-xl font-medium tracking-normal mt-2">
                Time Management For Students
              </h1>
              <div class="border-b-2 border-zinc-300 w-full mt-2"></div>
              <div class="flex capitalize justify-between w-full">
                <p class="font-semibold text-zinc-800">Prithvi</p>
                <p class="text-zinc-800 font-extralight font-[gilroy]">
                  Mar 18, 2025
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="newsletter w-full  flex  bg-[#ffffff] text-black items-center justify-center">
      <div class="w-full bg-gray-200  py-12 px-16 md:py-24 md:px-32">
        <div class="container md:mx-auto flex flex-col md:flex-row items-start justify-start md:justify-between md:items-center">
          <div class="text-3xl  md:text-4xl font-semibold font-[gilroy] text-gray-800">
            Subscribe to learn about our latest news
          </div>
          <form action="../actions/sent.php" method="post" class="flex items-start mt-4">
            <input type="email" name="email" placeholder="Enter your email"
              class="border-b border-gray-400 py-1 px-32 focus:outline-none placeholder-gray-500 pl-0">
            <button type="submit" class="ml-2 text-gray-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M14 5l7 7m0 0l-7 7M4 12H21" />
              </svg>
            </button>
          </form>
        </div>
        <?php
        if (isset($_GET['subscription']) && $_GET['subscription'] === 'success') {
          echo '<p style="color: green;" class="text-xl font-light">Thank you for subscribing! A confirmation email has been sent.</p>';
        }
        ?>
      </div>
    </section>
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
