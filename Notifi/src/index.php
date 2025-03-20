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
      
      /* Converted regular CSS to Tailwind custom utilities */
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

<body>
  <main class="bg-zinc-900 w-full  flex flex-col items-center justify-start text-white font-[mulish] min-h-screen">
    <nav
      id="navbar"
      class="w-full flex justify-between items-center px-32 py-5 bg-zinc-900 fixed top-0 z-50 transition-all duration-300">
      <div class="logo">
        <h1 class="text-4xl font-[mulish] leading-none tracking-[4px]">
          Notifi
        </h1>
      </div>
      <div
        class="text flex items-center gap-8 text-lg font-normal font-[gilroy]">
        <a href="./index.php" class="text-[#e0614a] cursor-pointer no-underline">Home</a>
        <a class="cursor-pointer no-underline hover:text-[#e0614a]" href="./blogs.php">Blogs</a>
        <a class="cursor-pointer hover:text-[#e0614a]" href="./extension.php">Extension</a>
        <a class="cursor-pointer hover:text-[#e0614a]" href="#features">Features</a>
        <a class="cursor-pointer no-underline hover:text-[#e0614a]" href="./About.php">About</a>
      </div>
      <div class="btn">
        <a
          href="./login.php"
          class="no-underline rounded-full border-none px-10 py-2 flex items-center justify-center  bg-[#e0614a] hover:bg-[#c95844]  text-white font-semibold  cursor-pointer transition-colors duration-300 ease-in-out">
          Login
        </a>
      </div>
    </nav>
    <section
      class="hero w-full h-[92vh] flex flex-col items-center justify-center gap-8">
      <div
        class="bg-[#80808033] backdrop-blur-xl px-[23px] py-[7px] rounded-full text-lg font-regular text-white text-center flex items-center gap-3 justify-center"
        style="line-height: 28px; letter-spacing: 0.1px">
        <h1>Measure Your Minutes</h1>
        <i class="ri-alarm-fill font-extralight text-[#e0614a]"></i>
      </div>
      <div class="hero-txt flex flex-col items-center justify-center gap-1">
        <h1 class="text-6xl capitalize font-semibold tracking-normal">
          Stay Ahead of Your Tasks
        </h1>
        <h1 class="text-6xl capitalize font-semibold tracking-normal">
          Never Miss a <span class="text-[#e0614a]">Reminder.</span>
        </h1>
      </div>
      <div class="hero-para w-1/3">
        <p
          class="text-center text-[#787878] text-lg font-[gilroy] font-normal">
          A simple yet powerful alarm-based task scheduler that helps you
          organize your life effortlessly.
        </p>
      </div>
      <div class="w-full flex items-center justify-center gap-6 mt-2 p-4">
        <div
          class="rounded-full px-8 py-3 bg-white text-black font-semibold cursor-pointer flex items-center justify-center gap-2 hover:border-[1px] hover:border-[#ffffff3d] hover:bg-transparent hover:text-white transition-colors duration-300 ease-in-out">
          Explore Blogs<i class="ri-news-line text-xl font-extralight"></i>
        </div>
        <div
          class="rounded-full px-8 py-3 border-[1px] border-[#ffffff3d] text-white font-semibold cursor-pointer flex items-center justify-center gap-2 hover:border-none hover:bg-white hover:text-black transition-colors duration-300 ease-in-out">
          Get Extension
          <i class="ri-briefcase-line text-xl font-extralight"></i>
        </div>
      </div>
    </section>
    <section class="w-full filler">
      <div
        class="w-full bg-[#eeeeee] text-black flex items-center gap-2 justify-center font-semibold text-sm tracking-[0.5px] py-[5px]">
        <p class="text-base">Proudly Backed By</p>
        <img
          src="../assets/lpu-logo-01-removebg-preview.png"
          class="w-8 h-8 object-cover"
          alt="lpulogo" />
      </div>
    </section>
    <section id="features" class="Features w-full bg-[#ffffff] text-black py-20">
      <div class="flex items-center flex-col justify-center gap-8">
        <div class="start flex items-center justify-center gap-2">
          <img src="https://yenmo.in/_next/static/media/TheGoodLogo.4722a172.svg" alt="">
          <h1 class="font-semibold text-3xl">Choice</h1>
        </div>
        <h1 class="font-medium text-[#161616] text-5xl font-[gilroy] tracking-normal">No forgetting. No regrets.</h1>
      </div>
      <div class="w-full h-[60px] block"></div>
      <div class="feature-section-heading flex items-center justify-center py-4px gap-4 w-full mt-12">
        <h1 class="text-5xl font-semibold text-center font-[gilroy] ">Features</h1>
        <img src="https://em-content.zobj.net/source/apple/391/star-struck_1f929.png" class="object-cover w-12 h-12" alt="">
      </div>
      <div class="feature-section flex items-center justify-center gap-16  px-8 py-12">
        <div class="first-container flex flex-col items-start justify-center gap-8 font-normal text-base">
          <div class="first-first-box bg-zinc-100 p-4 rounded-md w-xs">
            <div class="img-first-first-box">
              <i class="ri-calendar-line text-5xl text-[#ed745f]"></i>
            </div>
            <div class="text-first-first-box mt-4">
              <p class="font-semibold text-lg">Plan your day with automated alarms & reminders.</p>
            </div>
          </div>
          <div class="second-box bg-zinc-100 p-4 rounded-md w-xs">
            <div class="img-first-second-box">
              <i class="ri-news-fill text-5xl text-[#ed745f]"></i>
            </div>
            <div class="text-first-second-box mt-4">
              <p class="font-semibold text-lg">Stay updated with expert advice & life hacks.</p>
            </div>
          </div>
        </div>


        <div class="second-container flex flex-col items-start justify-center gap-8 font-normal text-base">
          <div class="second-first-box bg-zinc-100 p-4 rounded-md w-xs">
            <div class="img-second-first-box">
              <i class="ri-calendar-line text-5xl text-[#ed745f]"></i>
            </div>
            <div class="text-second-first-box mt-4">
              <p class="font-semibold text-lg">Plan your day with automated alarms & reminders.</p>
            </div>
          </div>
          <div class="second-second-box bg-zinc-100 p-4 rounded-md w-xs">
            <div class="img-second-second-box">
              <i class="ri-news-fill text-5xl text-[#ed745f]"></i>
            </div>
            <div class="text-second-second-box mt-4">
              <p class="font-semibold text-lg">Stay updated with expert advice & life hacks.</p>
            </div>
          </div>
        </div>


        <div class="third-container flex flex-col items-start justify-center gap-8">
          <div class="third-first-box bg-zinc-100 p-4 rounded-md w-xs">
            <div class="img-third-first-box">
              <i class="ri-task-fill text-5xl text-[#ed745f]"></i>
            </div>
            <div class="text-third-first-box mt-4">
              <p class="font-semibold text-lg">Your tasks, alarms, and reminders—all in one place.</p>
            </div>
          </div>
          <div class="third-second-box bg-zinc-100 p-4 rounded-md w-xs">
            <div class="img-third-second-box">
              <i class="ri-alarm-warning-fill text-5xl text-[#ed745f]"></i>
            </div>
            <div class="text-third-second-box mt-4">
              <p class="font-semibold text-lg">Never forget a deadline, get reminders in your inbox.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="howworks w-full py-20 px-12 flex flex-col items-start justify-center gap-4">
      <div class="flex items-start justify-center gap-2">
        <h1 class="font-semibold text-5xl text-zinc-100">How it Works </h1>
        <img src="https://em-content.zobj.net/source/apple/391/thinking-face_1f914.png" alt="" class="object-cover w-12 h-12">
      </div>
      <p class=" text-[#787878] text-lg font-[gilroy] font-normal">No missed tasks. No excuses. </p>
      <div class="flex items-center justify-start gap-8 mt-8">
        <div class="flex flex-col font-[gilroy] gap-6">
          <h1 class="text-3xl font-medium  tracking-wider">01 Set It & Forget It</h1>
          <div class="border-b-1 border-[#e0614a]"></div>
          <h1 class="text-3xl font-medium  tracking-wider">02 Smart Scheduling</h1>
          <div class="border-b-1 border-[#e0614a]"></div>
          <h1 class="text-3xl font-medium  tracking-wider">03 Custom Alerts</h1>
          <div class="border-b-1 border-[#e0614a]"></div>
          <h1 class="text-3xl font-medium  tracking-wider">04 Stay in Control</h1>
          <div class="border-b-1 border-[#e0614a]"></div>
        </div>
        <div></div>
      </div>
    </section>
    <!-- <section class="testimonials w-full py-20 px-12 flex bg-[#ffffff] text-black items-center justify-center">
        <h1 class="capitalize text-5xl font-medium font-[gilroy] mb-[40px]">What our User say!</h1>
        <div class="flex items-center justify-center">
            <div class=""></div>
        </div>
      </section> -->

    <section class="w-full py-20 px-12 flex bg-[#ffffff] text-black items-center justify-center">
      <div class="rounded-md bg-zinc-200 px-10 py-16 w-full flex flex-col items-center justify-center">
        <div class="flex gap-4 items-center justify-center">
          <h1 class="capitalize text-4xl font-semibold">Unleash TimeManagment Knowledge</h1>
          <img src="https://em-content.zobj.net/source/apple/391/party-popper_1f389.png" class="object-cover w-12 h-12" alt="">
        </div>
        <div class="flex gap-6 px-8 py-8 justify-between mt-12">
          <div class="rounded-lg flex flex-col items-start justify-start text-start w-1/3 bg-zinc-100 gap-4 p-2 cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out">
            <img src="https://courses-old.ankurwarikoo.com/wp-content/uploads/2025/02/MWYC.png" alt="" class="object-cover w-full h-full rounded-lg">
            <h1 class="text-xl font-medium tracking-normal mt-2">Make Writing Your Career</h1>
            <div class="border-b-2 border-zinc-300 w-full mt-2"></div>
            <div class="flex capitalize justify-between w-full">
              <p class="font-semibold text-zinc-800">Prithvi</p>
              <p class="text-zinc-800 font-extralight font-[gilroy]">Mar 18, 2025</p>
            </div>
          </div>
          <div class="rounded-lg flex flex-col items-start justify-start text-start w-1/3 bg-zinc-100  gap-4 p-2 cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out">
            <img src="https://courses-old.ankurwarikoo.com/wp-content/uploads/2025/02/TMFS.png" alt="" class="object-cover w-full rounded-lg">
            <h1 class="text-xl font-medium tracking-normal mt-2">Time Managment For Student</h1>
            <div class="border-b-2 border-zinc-300 w-full mt-2"></div>
            <div class="flex capitalize justify-between w-full">
              <p class="font-semibold text-zinc-800">Prithvi</p>
              <p class="text-zinc-800 font-extralight font-[gilroy]">Mar 18, 2025</p>
            </div>
          </div>
          <div class="rounded-lg flex flex-col items-start justify-start text-start w-1/3 bg-zinc-100  gap-4 p-2 cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out">
            <img src="https://courses-old.ankurwarikoo.com/wp-content/uploads/2025/02/MWYC.png" alt="" class="object-cover w-full rounded-lg">
            <h1 class="text-xl font-medium tracking-normal mt-2">Take Charge of Your Time</h1>
            <div class="border-b-2 border-zinc-300 w-full mt-2"></div>
            <div class="flex capitalize justify-between w-full">
              <p class="font-semibold text-zinc-800">Prithvi</p>
              <p class="text-zinc-800 font-extralight font-[gilroy]">Mar 18, 2025</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="faqs w-full text-black h-[85vh] px-12 flex items-center justify-center bg-[#ffffff]">

      <div class="bg-zinc-100 rounded-3xl p-10 w-full ">
        <h2 class="text-[48px] font-medium text-[#e0614a] font-mulish leading-[120%] mb-[40px]">
          Frequently Asked Questions
        </h2>

        <div class="border-b border-gray-200 py-4">
          <div class="flex justify-between items-center">
            <p class="text-lg">Can I customize my reminders?</p>
            <button class="text-[#e0614a] font-bold">+</button>
          </div>
        </div>

        <div class="border-b border-gray-200 py-4">
          <div class="flex justify-between items-center">
            <p class="text-lg">Is my data secure?</p>
            <button class="text-[#e0614a] font-bold">+</button>
          </div>
        </div>

        <div class="border-b border-gray-200 py-4">
          <div class="flex justify-between items-center">
            <p class="text-lg">What happens if I snooze a reminder?</p>
            <button class="text-[#e0614a] font-bold">+</button>
          </div>
        </div>

        <div class="border-b border-gray-200 py-4">
          <div class="flex justify-between items-center">
            <p class="text-lg">Do I need to keep the app open to receive reminders?</p>
            <button class="text-[#e0614a] font-bold">+</button>
          </div>
        </div>

        <div class="py-4">
          <div class="flex justify-between items-center">
            <p class="text-lg">How does the Smart Reminder App help me stay organized?</p>
            <button class="text-[#e0614a] font-bold">+</button>
          </div>
        </div>
      </div>

    </section>


    <section class="newsletter w-full  flex bg-[#ffffff] text-black items-center justify-center">
      <div class="w-full bg-gray-100 py-24 px-32">
        <div class="container mx-auto flex justify-between items-center">
          <div class="text-4xl font-semibold font-[gilroy] text-gray-800">
            Subscribe to learn about our latest news
          </div>
          <form action="../actions/sent.php" method="post" class="flex items-start">
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

    <footer class="bg-[#18181B] text-white pt-12 pb-2 px-4 w-full">
      <div class=" flex justify-around">

        <div class="flex flex-col">
          <h3 class="text-lg font-semibold mb-4">GET BETTER VERSION OF YOURS</h3>
          <a href="#" class="mb-2 hover:text-gray-300">ABOUT</a>
          <a href="#" class="mb-2 hover:text-gray-300">PARTNER WITH US</a>
          <a href="#" class="mb-2 hover:text-gray-300">BLOGS</a>
          <a href="#" class="hover:text-gray-300">EXTENSION</a>
        </div>

        <div class="flex flex-col">
          <h3 class="text-lg font-semibold mb-4">Contact</h3>
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
      <div class="mt-8 flex justify-around items-center relative">
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
  </script>
</body>

</html>