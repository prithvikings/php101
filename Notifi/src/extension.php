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
          <a class="cursor-pointer text-[#e0614a]" href="./extension.php">Extension</a>
          <a class="cursor-pointer no-underline hover:text-[#e0614a]" href="#">Features</a>
          <a class="cursor-pointer no-underline hover:text-[#e0614a]" href="./about.php">About</a>
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
        <div class="w-full flex flex-col items-start px-12 pt-9 pb-8  md:px-36 md:pt-18 md:pb-12">
            <h1 class=" text-2xl md:text-4xl font-semibold md:font-bold font-[gilroy] text-zinc-800 ">Download & Supercharge Your Productivity with Our Extension!</h1>
            <h1 class="text-lg md:text-xl font-medium mt-2 italic font-[gilroy] text-zinc-800 ">Never Miss a Task Again – Right from Your Browser!</h1>
            <p class="text-zinc-800 md:w-3xl text-md md:text-lg tracking-wide mt-5">Say goodbye to forgotten deadlines and last-minute rushes! Our <span class="text-black font-semibold italic">Notifi</span> Chrome extension keeps your tasks, alarms, and reminders just a click away.</p>
        </div>

        <div class="w-full flex flex-col items-start px-12 pb-14  md:px-36 md:pb-18">
            <div class="flex items-center gap-5">
                <img class="w-8 h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
            <h3 class="text-lg md:text-xl font-semibold text-zinc-700 mb-1 mt-2 tracking-wide"><span class="font-bold text-zinc-900">Seamless Task Scheduling</span> – Set reminders directly from your browser.</h3>
            </div>
            <div class="flex items-center gap-5 mt-2">
                <img class="w-8 h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
            <h3 class="text-lg md:text-xl font-semibold text-zinc-700 mb-1 mt-2 tracking-wide"><span class="font-bold text-zinc-900">Quick Access</span> – No complicated setup, just effortless task management.</h3>
            </div>
            <div class="flex items-center gap-5 mt-2">
                <img class="w-8 h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
            <h3 class="text-lg md:text-xl font-semibold text-zinc-700 mb-1 mt-2 tracking-wide"><span class="font-bold text-zinc-900">Smart Notifications</span> – Choose how and when you want to be reminded.</h3>
            </div>
            <div class="flex items-center gap-5 mt-2">
                <img class="w-8 h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
            <h3 class="text-lg md:text-xl font-semibold text-zinc-700 mb-1 mt-2 tracking-wide"><span class="font-bold text-zinc-900">Sync Across Devices</span> – Your data stays private, and your tasks stay safe.</h3>
            </div>
        </div>


        <div class="w-full flex flex-col items-start  px-12 pb-6  md:px-36 md:pb-8">
            <h1 class="text-4xl md:text-5xl font-medium text-zinc-800 font-[gilroy]">How to Get Started?</h1>
            <div class="flex items-center gap-5 mt-5">
                <img class="w-8 h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
            <h3 class="text-lg md:text-xl font-semibold text-zinc-700 mb-1 mt-2 tracking-wide">Download the Extension Code from our GitHub repository.</h3>
            </div>
            <div class="flex items-center gap-5 mt-2">
                <img class="w-8 h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
            <h3 class="text-lg md:text-xl font-semibold text-zinc-700 mb-1 mt-2 tracking-wide">Open Chrome → Extensions and enable Developer Mode (top right corner).</h3>
            </div>
            <div class="flex items-center gap-5 mt-2">
                <img class="w-8 h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
            <h3 class="text-lg md:text-xl font-semibold text-zinc-700 mb-1 mt-2 tracking-wide">Click "Load Unpacked" and select the downloaded extension folder.</h3>
            </div>
            <div class="flex items-center gap-5 mt-2">
                <img class="w-8 h-8" src="https://em-content.zobj.net/source/apple/391/check-mark-button_2705.png" alt="">
            <h3 class="text-lg md:text-xl font-semibold text-zinc-700 mb-1 mt-2 tracking-wide"><span class="font-bold text-zinc-900">Pin the Extension for quick access and start scheduling your tasks!</h3>
            </div>
        </div>
        <div class="w-full flex px-12 pb-4 md:px-36 md:pb-4">
            <a href="#"class="font-bold text-md md:text-xl flex items-center gap-4 text-blue-500"><i class="ri-link text-md text-blue-500"></i>Download from GitHub</a>
        </div>
        <div class="w-full flex px-12 pb-18 md:px-36 md:pb-18 text-zinc-700 text-xl font-medium italic gap-2">
                    <p>Because remembering everything is overrated—let us do it for you!</p>
            <img src="https://em-content.zobj.net/source/apple/391/smiling-face-with-sunglasses_1f60e.png" class="w-8 h-8 hidden md:flex" alt="">

    </div>
    <footer class="bg-[#18181B] text-white px-4 pb-2 pt-12 md:pt-12 md:pb-2 md:px-4 w-full">
            <div class=" flex justify-around">
          
              <div class="flex flex-col">
                <h3 class="text-sm md:text-lg font-semibold mb-4">GET BETTER VERSION OF YOURS</h3>
                <a href="./about.php" class="mb-2 hover:text-gray-300">ABOUT</a>
                <a href="#" class="mb-2 hover:text-gray-300">PARTNER WITH US</a>
                <a href="./blogs.php" class="mb-2 hover:text-gray-300">BLOGS</a>
                <a href="./extension.php" class="hover:text-gray-300">EXTENSION</a>
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
