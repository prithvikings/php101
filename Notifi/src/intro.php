<?php
session_start();
include('../actions/connect.php');

// Redirect to login if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../src/login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $std_best = $_POST['std_best'];
    $std_age = $_POST['std_age'];
    $std_usually = $_POST['std_usually'];
    $std_oops = $_POST['std_oops'];
    $std_reminder = $_POST['std_reminder'];
    $std_method = $_POST['std_method'];
    $std_productivity = $_POST['std_productivity'];
    $important = $_POST['important'];

    // Insert additional user details into the database
    $sql = "INSERT INTO user_details (user_id, std_best, std_age, std_usually, std_oops, std_reminder, std_method, std_productivity, important) 
            VALUES ('$user_id', '$std_best', '$std_age', '$std_usually', '$std_oops', '$std_reminder', '$std_method', '$std_productivity', '$important')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("Details Saved Successfully"); window.location.href="../src/dashboard.php";</script>';
    } else {
        echo '<script>alert("Failed to Save Details"); window.location.href="../src/intro.php";</script>';
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
      <main class="bg-zinc-100 w-full flex items-center justify-start text-black font-[mulish]  p-16 relative">
          <a href="./index.php" class="absolute text-3xl text-black top-8 right-10">
              <i class="ri-close-line"></i>
              </a>

          <div class="  w-full p-8 flex items-center justify-center">
              <div class="bg-white p-12 pl-16 rounded-md w-5xl flex flex-col gap-4 text-gray-700">
                  <h1 class="text-3xl font-medium font-[gilroy]">Just a few quick questions to make your reminders smarter!</h1>
          
                    <div class="w-full flex items-center relative">
                      <div class="w-full flex flex-col mb-2 gap-2">
                          <h2 class="text-xl font-regular font-[gilroy] text-gray-800 ">
                              No, it’s not a job interview!
                            </h2>
                            <span class="text-sm text-gray-700 tracking-wider font-light relative"><img src="https://em-content.zobj.net/source/apple/391/call-me-hand_light-skin-tone_1f919-1f3fb_1f3fb.png" class="w-5 h-5 absolute left-28" alt=""> So take chill pill</span>
                      </div>

                    </div>
                    <form class="space-y-4 relative" action="./intro.php" method="POST">
                      <img src="https://em-content.zobj.net/source/apple/391/smiling-face-with-hearts_1f970.png" alt="" class="w-7 h-7 absolute left-[-37px] top-[6.5%] transform -translate-y-1/2">
                      <label for="role">What describes you best?</label>
                      <select id="role" name="std_best" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
                        <option value="" disabled selected>Select an option</option>
                        <option value="student">🎓 Student</option>
                        <option value="working">💼 Working Professional</option>
                        <option value="other">🏠 Other</option>
                      </select>
                      
                      <img src="https://em-content.zobj.net/source/apple/391/face-with-peeking-eye_1fae3.png" alt="" class="w-7 h-7 absolute left-[-37px] top-[18%] transform -translate-y-1/2">
                      <label for="age">What’s your age bracket?</label>
                      <select id="age" name="std_age" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400 rounded-none">
                        <option value="" disabled selected>Select your age</option>
                        <option value="under18" >🌱 Under 18</option>
                        <option value="18-25">🔥 18-25</option>
                        <option value="26-35">🚀 26-35</option>
                        <option value="36+">🏆 36+</option>
                      </select>
          
                      <img src="https://em-content.zobj.net/source/apple/391/face-in-clouds_1f636-200d-1f32b-fe0f.png" class="w-7 h-7 absolute left-[-37px] top-[29%] transform -translate-y-1/2" alt="">
                      <label for="forget-style">How do you usually forget things?</label>
                      <select id="forget-style" name="std_usually" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
                        <option value="" disabled selected>Pick your struggle 😆</option>
                        <option value="ignore">🤦‍♂️ I set reminders and still ignore them</option>
                        <option value="forget">😵‍💫 I don’t even remember to set reminders</option>
                        <option value="lose-notes">📝 I write it down but lose the notes</option>
                        <option value="rely-on-memory">⏰ I rely on my memory (and fail miserably)</option>
                      </select>
          
                      <img src="https://em-content.zobj.net/source/apple/391/melting-face_1fae0.png" class="w-7 h-7 absolute left-[-37px] top-[40.5%] transform -translate-y-1/2" alt="">
                      <label for="oops">What’s your most common “Oops! I forgot” moment?</label>
                      <select id="oops" name="std_oops" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
                        <option value="" disabled selected>Select your most common forgettable moment</option>
                        <option value="deadlines">📅 Deadlines & assignments</option>
                        <option value="birthdays">🎂 Birthdays & anniversaries</option>
                        <option value="groceries">🛒 Grocery shopping</option>
                        <option value="medicine">💊 Taking medicine</option>
                        <option value="everything">🚀 Everything, honestly!</option>
                      </select>
          
                      <img src="https://em-content.zobj.net/source/apple/391/handshake_light-skin-tone_1f91d-1f3fb_1f3fb.png" class="w-7 h-7 absolute left-[-37px] top-[52%] transform -translate-y-1/2" alt="">
                      <label for="reminder-time">When do you want us to remind you?</label>
                      <select id="reminder-time" name="std_reminder" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
                        <option value="" disabled selected>Select your preferred reminder time</option>
                        <option value="morning">🌅 Morning vibes (7 AM - 10 AM)</option>
                        <option value="midday">🌞 Midday focus (12 PM - 3 PM)</option>
                        <option value="evening">🌙 Evening chill (6 PM - 9 PM)</option>
                        <option value="night">🦉 Night owl mode (After 10 PM)</option>
                      </select>
          
                      <img src="https://em-content.zobj.net/source/apple/391/man-genie_1f9de-200d-2642-fe0f.png" class="w-7 h-7 absolute left-[-37px] top-[63%] transform -translate-y-1/2" alt="">
                      <label for="reminder-method">How do you want to receive reminders?</label>
                      <select id="reminder-method" name="std_method" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
                        <option value="" disabled selected>Select your notification preference</option>
                        <option value="app">🔔 App notifications</option>
                        <option value="email">📩 Email alerts</option>
                        <option value="sms">📱 SMS reminders</option>
                        <option value="wake-up">🔊 A loud wake-up call (Just kidding! Or maybe not? 😆)</option>
                      </select>
          

                      <img src="https://em-content.zobj.net/source/apple/391/nerd-face_1f913.png" class="w-7 h-7 absolute left-[-37px] top-[74%] transform -translate-y-1/2" alt="">
                      <label for="productivity">What’s your productivity vibe?</label>
                      <select id="productivity" name="std_productivity" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
                        <option value="" disabled selected>Pick your productivity level</option>
                        <option value="organized">🎯 Super organized</option>
                        <option value="sometimes">😎 I get things done (eventually)</option>
                        <option value="procrastinator">🔥 Procrastination king/queen</option>
                      </select>
          
                      <label for="important-thing">One thing you absolutely don’t want to forget?</label>
                      <textarea id="important-thing" name="important" placeholder="Write here..." class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400"></textarea>
          

                      
                      <button type="submit" class="w-full bg-gray-500 text-white p-3 hover:bg-gray-600 cursor-pointer">
                        Save & Continue
                      </button>
                    </form>
                    <a class="text-center cursor-pointer text-sm hover:text-zinc-500 font-medium" href="./login.php">Login</a>
                  </div>
          </div>

      </main>
    </body>
  </html>
