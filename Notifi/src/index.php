<?php
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style type="text/tailwindcss">
    @layer utilities {
      .backdrop-blur-navbar {
        @apply bg-zinc-800/80 backdrop-blur-md shadow-md;
      }
      
      .nav-hidden {
        transform: translateY(-100%);
      }
    }
  </style>
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
</head>

<body class="font-[mulish]">
  <main class="bg-zinc-900 w-full flex flex-col items-center justify-start text-white min-h-screen">
    <!-- Navigation -->
    <nav
      id="navbar"
      class="w-full flex justify-between items-center px-4 sm:px-8 md:px-12 lg:px-32 py-3 md:py-4 bg-zinc-900 fixed top-0 z-50 transition-all duration-300">
      <div class="logo">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-none tracking-[2px] sm:tracking-[4px] nav-title">
          Notifi
        </h1>
      </div>
      
      <!-- Mobile Menu Button -->
      <button id="mobile-menu-button" class="md:hidden text-2xl">
        <i class="ri-menu-line"></i>
      </button>
      
      <div id="menu" class="hidden md:flex items-center gap-4 lg:gap-8">
        <div class="text flex flex-col md:flex-row items-center gap-4 lg:gap-8 text-base lg:text-lg font-normal">
          <a class="text-[#e0614a] cursor-pointer no-underline nav-elem" href="./index.php">Home</a>
          <a class="cursor-pointer no-underline hover:text-[#e0614a] nav-elem" href="./blogs.php">Blogs</a>
          <a class="cursor-pointer hover:text-[#e0614a] nav-elem" href="./extension.php">Extension</a>
          <a class="cursor-pointer hover:text-[#e0614a] nav-elem" href="#features">Features</a>
          <a class="cursor-pointer no-underline hover:text-[#e0614a] nav-elem" href="./About.php">About</a>
        </div>
        <div class="btn">
          <a
            href="./login.php"
            class="no-underline rounded-full border-none px-4 py-1 sm:px-6 sm:py-2 md:px-8 md:py-2 lg:px-10 lg:py-2 flex items-center justify-center bg-[#e0614a] hover:bg-[#c95844] text-white font-semibold cursor-pointer transition-colors duration-300 ease-in-out text-sm sm:text-base nav-elem">
            Login
          </a>
        </div>
      </div>
    </nav>
    
    <!-- Mobile Menu (hidden by default) -->
    <div id="mobile-menu" class="hidden fixed top-16 left-0 right-0 bg-zinc-800 z-40 p-4 shadow-lg">
      <div class="flex flex-col gap-4">
        <a href="./index.php" class="text-[#e0614a] cursor-pointer no-underline py-2">Home</a>
        <a href="./blogs.php" class="text-white hover:text-[#e0614a] cursor-pointer no-underline py-2">Blogs</a>
        <a href="./extension.php" class="text-white hover:text-[#e0614a] cursor-pointer py-2">Extension</a>
        <a href="#features" class="text-white hover:text-[#e0614a] cursor-pointer py-2">Features</a>
        <a href="./About.php" class="text-white hover:text-[#e0614a] cursor-pointer no-underline py-2">About</a>
        <a href="./login.php" class="mt-4 no-underline rounded-full border-none px-6 py-2 flex items-center justify-center bg-[#e0614a] hover:bg-[#c95844] text-white font-semibold cursor-pointer transition-colors duration-300 ease-in-out">
          Login
        </a>
      </div>
    </div>

    <!-- Hero Section -->
    <section class="hero w-full h-[90vh] sm:h-[95vh] md:h-[92vh] flex flex-col items-center justify-center gap-4 sm:gap-6 md:gap-8 px-4 ">
      <div class="bg-[#80808033] backdrop-blur-xl px-3 py-1 sm:px-4 sm:py-2 md:px-[23px] md:py-[7px] rounded-full text-sm sm:text-md md:text-lg font-regular text-white text-center flex items-center gap-2 sm:gap-3 justify-center hero-elem">
        <h1>Measure Your Minutes</h1>
        <i class="ri-alarm-fill font-extralight text-[#e0614a]"></i>
      </div>
      
      <div class="hero-txt flex flex-col items-center justify-center gap-1 sm:gap-2 hero-elem">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold tracking-normal text-center">
          Stay Ahead of Your Tasks
        </h1>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold tracking-normal text-center">
          Never Miss a <span class="text-[#e0614a]">Reminder.</span>
        </h1>
      </div>
      
      <div class="hero-para w-full sm:w-4/5 md:w-2/3 lg:w-1/2 xl:w-1/3 hero-elem">
        <p class="text-center text-[#787878] text-sm sm:text-base md:text-lg font-normal">
          A simple yet powerful alarm-based task scheduler that helps you
          organize your life effortlessly.
        </p>
      </div>
      
      <div class="w-full flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 md:gap-6 mt-2 sm:mt-4 p-2 sm:p-4">
        <div class="rounded-full px-4 py-1 sm:px-5 sm:py-2 md:px-8 md:py-3 bg-white text-black font-semibold cursor-pointer flex items-center justify-center gap-1 sm:gap-2 hover:border-[1px] hover:border-[#ffffff3d] hover:bg-transparent hover:text-white transition-colors duration-300 ease-in-out text-xs sm:text-sm hero-elem">
          <a href="./blogs.php">Explore Blogs</a>
          <i class="ri-news-line text-lg sm:text-xl font-extralight"></i>
        </div>
        <div class="rounded-full px-4 py-1 sm:px-5 sm:py-2 md:px-8 md:py-3 border-[1px] border-[#ffffff3d] text-white font-semibold cursor-pointer flex items-center justify-center gap-1 sm:gap-2 hover:border-none hover:bg-white hover:text-black transition-colors duration-300 ease-in-out text-xs sm:text-sm hero-elem">
          <a href="./extension.php">Get Extension</a>
          <i class="ri-briefcase-line text-lg sm:text-xl font-extralight"></i>
        </div>
      </div>
    </section>

    <!-- Filler Section -->
    <section class="w-full filler">
      <div class="w-full bg-[#eeeeee] text-black flex items-center gap-1 sm:gap-2 justify-center font-semibold text-xs sm:text-sm tracking-[0.5px] py-[5px]">
        <p class="text-xs sm:text-sm md:text-base">Proudly Backed By</p>
        <img src="../assets/lpu-logo-01-removebg-preview.png" class="w-5 h-5 sm:w-6 sm:h-6 md:w-8 md:h-8 object-cover" alt="lpulogo" />
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="Features w-full bg-[#ffffff] text-black py-10 sm:py-16 md:py-20 px-4 sm:px-6 md:px-8 lg:px-12 features-section">
      <div class="flex items-center flex-col justify-center gap-4 sm:gap-6 md:gap-8">
        <div class="start flex items-center justify-center gap-1 sm:gap-2">
          <img src="https://yenmo.in/_next/static/media/TheGoodLogo.4722a172.svg" alt="" class="h-6 w-6 sm:h-8 sm:w-8">
          <h1 class="font-semibold text-xl sm:text-2xl md:text-3xl">Choice</h1>
        </div>
        <h1 class="font-medium text-[#161616] text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-center">No forgetting. No regrets.</h1>
      </div>
      
      <div class="w-full h-[20px] sm:h-[30px] md:h-[60px] block"></div>
      
      <div class="feature-section-heading flex items-center justify-center py-2 sm:py-4 gap-2 sm:gap-4 w-full mt-6 sm:mt-12">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold text-center">Features</h1>
        <img src="https://em-content.zobj.net/source/apple/391/star-struck_1f929.png" class="object-cover w-6 h-6 sm:w-8 sm:h-8 md:w-12 md:h-12" alt="">
      </div>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8 px-2 sm:px-4 md:px-8 py-6 sm:py-8 md:py-12 feature-section">
        <div class="bg-zinc-100 p-3 sm:p-4 rounded-md">
          <div class="img-first-first-box">
            <i class="ri-calendar-line text-4xl sm:text-5xl text-[#ed745f]"></i>
          </div>
          <div class="text-first-first-box mt-3 sm:mt-4">
            <p class="font-semibold text-base sm:text-lg">Plan your day with automated alarms & reminders.</p>
          </div>
        </div>
        
        <div class="bg-zinc-100 p-3 sm:p-4 rounded-md">
          <div class="img-first-second-box">
            <i class="ri-news-fill text-4xl sm:text-5xl text-[#ed745f]"></i>
          </div>
          <div class="text-first-second-box mt-3 sm:mt-4">
            <p class="font-semibold text-base sm:text-lg">Stay updated with expert advice & life hacks.</p>
          </div>
        </div>
        
        <div class="bg-zinc-100 p-3 sm:p-4 rounded-md">
          <div class="img-second-first-box">
            <i class="ri-calendar-line text-4xl sm:text-5xl text-[#ed745f]"></i>
          </div>
          <div class="text-second-first-box mt-3 sm:mt-4">
            <p class="font-semibold text-base sm:text-lg">Plan your day with automated alarms & reminders.</p>
          </div>
        </div>
        
        <div class="bg-zinc-100 p-3 sm:p-4 rounded-md">
          <div class="img-second-second-box">
            <i class="ri-news-fill text-4xl sm:text-5xl text-[#ed745f]"></i>
          </div>
          <div class="text-second-second-box mt-3 sm:mt-4">
            <p class="font-semibold text-base sm:text-lg">Stay updated with expert advice & life hacks.</p>
          </div>
        </div>
        
        <div class="bg-zinc-100 p-3 sm:p-4 rounded-md">
          <div class="img-third-first-box">
            <i class="ri-task-fill text-4xl sm:text-5xl text-[#ed745f]"></i>
          </div>
          <div class="text-third-first-box mt-3 sm:mt-4">
            <p class="font-semibold text-base sm:text-lg">Your tasks, alarms, and reminders—all in one place.</p>
          </div>
        </div>
        
        <div class="bg-zinc-100 p-3 sm:p-4 rounded-md">
          <div class="img-third-second-box">
            <i class="ri-alarm-warning-fill text-4xl sm:text-5xl text-[#ed745f]"></i>
          </div>
          <div class="text-third-second-box mt-3 sm:mt-4">
            <p class="font-semibold text-base sm:text-lg">Never forget a deadline, get reminders in your inbox.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- How It Works Section -->
    <section class="howworks w-full px-4 sm:px-6 md:px-8 lg:px-12 py-8 sm:py-12 md:py-16 lg:py-20 flex flex-col items-start justify-center gap-2 sm:gap-4">
      <div class="flex items-start justify-center gap-1 sm:gap-2">
        <h1 class="font-semibold text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-zinc-100">How it Works </h1>
        <img src="https://em-content.zobj.net/source/apple/391/thinking-face_1f914.png" alt="" class="object-cover h-6 w-6 sm:h-8 sm:w-8 md:w-12 md:h-12">
      </div>
      <p class="text-[#787878] text-xs sm:text-sm md:text-base lg:text-lg font-normal">No missed tasks. No excuses. </p>
      <div class="flex items-center justify-start gap-4 sm:gap-6 md:gap-8 mt-4 sm:mt-6 md:mt-8">
        <div class="flex flex-col gap-2 sm:gap-3 md:gap-4 lg:gap-6">
          <h1 class="text-xl sm:text-2xl md:text-3xl font-medium tracking-wider">01 Set It & Forget It</h1>
          <div class="border-b-1 border-[#e0614a]"></div>
          <h1 class="text-xl sm:text-2xl md:text-3xl font-medium tracking-wider">02 Smart Scheduling</h1>
          <div class="border-b-1 border-[#e0614a]"></div>
          <h1 class="text-xl sm:text-2xl md:text-3xl font-medium tracking-wider">03 Custom Alerts</h1>
          <div class="border-b-1 border-[#e0614a]"></div>
          <h1 class="text-xl sm:text-2xl md:text-3xl font-medium tracking-wider">04 Stay in Control</h1>
          <div class="border-b-1 border-[#e0614a]"></div>
        </div>
      </div>
    </section>

    <!-- Blog Section -->
    <section class="w-full py-8 sm:py-12 md:py-16 lg:py-20 px-4 sm:px-6 md:px-8 lg:px-12 flex bg-[#ffffff] text-black items-center justify-center">
      <div class="rounded-md bg-zinc-200 px-4 py-6 sm:px-6 sm:py-8 md:px-10 md:py-16 w-full flex flex-col items-center justify-center">
        <div class="flex gap-2 sm:gap-4 items-center justify-center flex-col sm:flex-row">
          <h1 class="capitalize text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold text-center">Unleash TimeManagment Knowledge</h1>
          <img src="https://em-content.zobj.net/source/apple/391/party-popper_1f389.png" class="object-cover w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12" alt="">
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 px-2 sm:px-4 py-6 sm:py-8 md:py-12 justify-between mt-6 sm:mt-12">
          <div class="blog-card rounded-lg flex flex-col items-start justify-start text-start bg-zinc-100 gap-2 sm:gap-3 p-2 cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out">
            <img src="https://courses-old.ankurwarikoo.com/wp-content/uploads/2025/02/MWYC.png" alt="" class="object-cover w-full h-full rounded-lg">
            <h1 class="text-base sm:text-lg md:text-xl font-medium tracking-normal mt-1 sm:mt-2">Make Writing Your Career</h1>
            <div class="border-b-2 border-zinc-300 w-full mt-1 sm:mt-2"></div>
            <div class="flex capitalize justify-between w-full text-xs sm:text-sm">
              <p class="font-semibold text-zinc-800">Ankur Warikoo</p>
              <p class="text-zinc-800 font-extralight">Mar 18, 2025</p>
            </div>
          </div>
          
          <div class="blog-card rounded-lg flex flex-col items-start justify-start text-start bg-zinc-100 gap-2 sm:gap-3 p-2 cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out">
            <img src="https://courses-old.ankurwarikoo.com/wp-content/uploads/2025/02/TMFS.png" alt="" class="object-cover w-full rounded-lg">
            <h1 class="text-base sm:text-lg md:text-xl font-medium tracking-normal mt-1 sm:mt-2">Time Managment For Student</h1>
            <div class="border-b-2 border-zinc-300 w-full mt-1 sm:mt-2"></div>
            <div class="flex capitalize justify-between w-full text-xs sm:text-sm">
              <p class="font-semibold text-zinc-800">Ankur Warikoo</p>
              <p class="text-zinc-800 font-extralight">Mar 18, 2025</p>
            </div>
          </div>
          
          <div class="blog-card rounded-lg flex flex-col items-start justify-start text-start bg-zinc-100 gap-2 sm:gap-3 p-2 cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out">
            <img src="https://courses-old.ankurwarikoo.com/wp-content/uploads/2025/02/MWYC.png" alt="" class="object-cover w-full rounded-lg">
            <h1 class="text-base sm:text-lg md:text-xl font-medium tracking-normal mt-1 sm:mt-2">Take Charge of Your Time</h1>
            <div class="border-b-2 border-zinc-300 w-full mt-1 sm:mt-2"></div>
            <div class="flex capitalize justify-between w-full text-xs sm:text-sm">
              <p class="font-semibold text-zinc-800">Ankur Warikoo</p>
              <p class="text-zinc-800 font-extralight">Mar 18, 2025</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQs Section -->
    <section class="faqs w-full text-black h-auto sm:h-[85vh] px-4 sm:px-6 md:px-8 lg:px-12 flex items-center justify-center bg-[#ffffff] py-8 sm:py-12 md:py-16">
      <div class="bg-zinc-100 rounded-xl sm:rounded-2xl md:rounded-3xl p-4 sm:p-6 md:p-8 lg:p-10 w-full">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-medium text-[#e0614a] leading-[120%] mb-4 sm:mb-6 md:mb-8">
          Frequently Asked Questions
        </h2>

        <div class="border-b border-gray-200 py-2 sm:py-3 md:py-4">
          <div class="flex justify-between items-center">
            <p class="text-sm sm:text-base md:text-lg">Can I customize my reminders?</p>
            <button class="text-[#e0614a] font-bold text-lg sm:text-xl">+</button>
          </div>
        </div>

        <div class="border-b border-gray-200 py-2 sm:py-3 md:py-4">
          <div class="flex justify-between items-center">
            <p class="text-sm sm:text-base md:text-lg">Is my data secure?</p>
            <button class="text-[#e0614a] font-bold text-lg sm:text-xl">+</button>
          </div>
        </div>

        <div class="border-b border-gray-200 py-2 sm:py-3 md:py-4">
          <div class="flex justify-between items-center">
            <p class="text-sm sm:text-base md:text-lg">What happens if I snooze a reminder?</p>
            <button class="text-[#e0614a] font-bold text-lg sm:text-xl">+</button>
          </div>
        </div>

        <div class="border-b border-gray-200 py-2 sm:py-3 md:py-4">
          <div class="flex justify-between items-center">
            <p class="text-sm sm:text-base md:text-lg">Do I need to keep the app open to receive reminders?</p>
            <button class="text-[#e0614a] font-bold text-lg sm:text-xl">+</button>
          </div>
        </div>

        <div class="py-2 sm:py-3 md:py-4">
          <div class="flex justify-between items-center">
            <p class="text-sm sm:text-base md:text-lg">How does the Smart Reminder App help me stay organized?</p>
            <button class="text-[#e0614a] font-bold text-lg sm:text-xl">+</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter w-full flex bg-[#ffffff] text-black items-center justify-center">
      <div class="w-full bg-gray-100 py-8 sm:py-12 md:py-16 lg:py-24 px-4 sm:px-6 md:px-8 lg:px-16 xl:px-32">
        <div class="container mx-auto flex flex-col md:flex-row items-start md:items-center justify-start md:justify-between gap-4 sm:gap-6">
          <div class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold text-gray-800">
            Subscribe to learn about our latest news
          </div>
          
          <form action="../actions/sent.php" method="post" class="flex items-start w-full md:w-auto">
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

        <div class="flex flex-col">
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

        <div class="flex items-center sm:absolute left-[50%] transform sm:translate-x-[-50%]">
          <p class="mr-1 sm:mr-2 text-xs sm:text-sm">Proudly Backed by</p>
          <img src="../assets/lpu-logo-01-removebg-preview.png" alt="Lpu" class="h-4 sm:h-5 md:h-6">
        </div>

        <p class="text-xs sm:text-sm">© Notifi Technologies Pvt. Ltd, all rights reserved.</p>
      </div>
    </footer>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    // JavaScript to handle scroll behaviors
    let lastScrollY = window.scrollY;
    let scrollThreshold = 50; // How many pixels to scroll before showing/hiding

    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      const currentScrollY = window.scrollY;

      // Always apply blur when not at the top
      if (currentScrollY > 10) {
        navbar.classList.add('backdrop-blur-navbar');
      } else {
        navbar.classList.remove('backdrop-blur-navbar');
      }

      // Handle hiding/showing based on scroll direction
      if (currentScrollY > lastScrollY && currentScrollY > scrollThreshold) {
        // Scrolling down - hide the navbar
        navbar.classList.add('nav-hidden');
      } else if (currentScrollY < lastScrollY) {
        // Scrolling up - show the navbar
        navbar.classList.remove('nav-hidden');
      }

      lastScrollY = currentScrollY;
    });

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    mobileMenuButton.addEventListener('click', function() {
      mobileMenu.classList.toggle('hidden');
    });

    //GSAP Animations
    let tl=gsap.timeline();

tl.from(".nav-title",{
    duration:0.4,
    y: -100,
    opacity:0,
    ease:"power1.out",
    delay:0.2,
})
tl.from(".nav-elem",{
    duration:0.4,
    delay:0.2,
    opacity:0,
    y:-50,
    stagger:0.2,
    ease:"power2.out"
})

tl.from(".feature-section",{
    duration:0.5,
    delay:0.2,
    opacity:0,
    y:100,
    ease:"power1.out",
    scrollTrigger:{
        trigger:".feature-section",
        start:"top 60%",
        end:"top 40%",
        scrub:1,
        scroller:"body",
    }
})

tl.from(".howworks",{
    duration:0.5,
    delay:0.2,
    opacity:0,
    x:-100,
    ease:"power1.out",
    scrollTrigger:{
        trigger:".howworks",
        start:"top 60%",
        end:"top 40%",
        scrub:1,
        scroller:"body",
    }
})

tl.from(".blog-card",{
    duration:0.5,
    delay:0.2,
    opacity:0,
    stagger:0.2,
    ease:"power1.out",
    scrollTrigger:{
        trigger:".blog-card",
        start:"top 60%",
        end:"top 40%",
        scrub:1,
        scroller:"body",
    }
})


gsap.from(".hero-elem",{
    duration:1,
    blur:0.5,
    opacity:0,
    ease:"power1.out",
    delay:0.5,
    stagger:0.2,

})
  </script>
    </body>
</html>