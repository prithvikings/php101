<?php
session_start();
include('../actions/connect.php');

// Redirect to login if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../src/login.php");
    exit();
}

// Fetch user details from user_register
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM user_register WHERE id = '$user_id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

// Fetch additional details from user_details
$sql_details = "SELECT * FROM user_details WHERE user_id = '$user_id'";
$result_details = mysqli_query($conn, $sql_details);
$user_details = mysqli_fetch_assoc($result_details);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $std_best = $_POST['std_best'];
    $std_age = $_POST['std_age'];
    $std_usually = $_POST['std_usually'];
    $std_oops = $_POST['std_oops'];
    $std_reminder = $_POST['std_reminder'];
    $std_method = $_POST['std_method'];
    $std_productivity = $_POST['std_productivity'];
    $important = $_POST['important'];

    // Update user details in the database
    $sql = "UPDATE user_details SET 
            std_best = '$std_best', 
            std_age = '$std_age', 
            std_usually = '$std_usually', 
            std_oops = '$std_oops', 
            std_reminder = '$std_reminder', 
            std_method = '$std_method', 
            std_productivity = '$std_productivity', 
            important = '$important' 
            WHERE user_id = '$user_id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("Profile Updated Successfully"); window.location.href="./dashboard.php";</script>';
    } else {
        echo '<script>alert("Failed to Update Profile: ' . mysqli_error($conn) . '"); window.location.href="./edit.php";</script>';
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
    <title>Edit Profile</title>
  </head>
  <body>
    <main class="bg-zinc-100 w-full flex items-center justify-start text-black font-[mulish] p-16 relative">
      <a href="./index.php" class="absolute text-3xl text-black top-8 right-10">
        <i class="ri-close-line"></i>
      </a>

      <div class="w-full p-8 flex items-center justify-center">
        <div class="bg-white p-12 pl-16 rounded-md w-5xl flex flex-col gap-4 text-gray-700">
          <h1 class="text-3xl font-medium font-[gilroy]">Edit Your Profile</h1>

          <div class="w-full flex items-center relative">
            <div class="w-full flex flex-col mb-2 gap-2">
              <h2 class="text-xl font-regular font-[gilroy] text-gray-800">
                Update your details to keep your reminders smarter!
              </h2>
              <span class="text-sm text-gray-700 tracking-wider font-light relative">
                <img src="https://em-content.zobj.net/source/apple/391/call-me-hand_light-skin-tone_1f919-1f3fb_1f3fb.png" class="w-5 h-5 absolute left-28" alt="">
                So take a chill pill
              </span>
            </div>
          </div>

          <form class="space-y-4 relative" action="./edit.php" method="POST">
            <!-- What describes you best? -->
            <img src="https://em-content.zobj.net/source/apple/391/smiling-face-with-hearts_1f970.png" alt="" class="w-7 h-7 absolute left-[-37px] top-[6.5%] transform -translate-y-1/2">
            <label for="std_best">What describes you best?</label>
            <select id="std_best" name="std_best" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
              <option value="student" <?php echo ($user_details['std_best'] === 'student') ? 'selected' : ''; ?>>🎓 Student</option>
              <option value="working" <?php echo ($user_details['std_best'] === 'working') ? 'selected' : ''; ?>>💼 Working Professional</option>
              <option value="other" <?php echo ($user_details['std_best'] === 'other') ? 'selected' : ''; ?>>🏠 Other</option>
            </select>

            <!-- What’s your age bracket? -->
            <img src="https://em-content.zobj.net/source/apple/391/face-with-peeking-eye_1fae3.png" alt="" class="w-7 h-7 absolute left-[-37px] top-[18%] transform -translate-y-1/2">
            <label for="std_age">What’s your age bracket?</label>
            <select id="std_age" name="std_age" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
              <option value="under18" <?php echo ($user_details['std_age'] === 'under18') ? 'selected' : ''; ?>>🌱 Under 18</option>
              <option value="18-25" <?php echo ($user_details['std_age'] === '18-25') ? 'selected' : ''; ?>>🔥 18-25</option>
              <option value="26-35" <?php echo ($user_details['std_age'] === '26-35') ? 'selected' : ''; ?>>🚀 26-35</option>
              <option value="36+" <?php echo ($user_details['std_age'] === '36+') ? 'selected' : ''; ?>>🏆 36+</option>
            </select>

            <!-- How do you usually forget things? -->
            <img src="https://em-content.zobj.net/source/apple/391/face-in-clouds_1f636-200d-1f32b-fe0f.png" class="w-7 h-7 absolute left-[-37px] top-[29%] transform -translate-y-1/2" alt="">
            <label for="std_usually">How do you usually forget things?</label>
            <select id="std_usually" name="std_usually" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
              <option value="ignore" <?php echo ($user_details['std_usually'] === 'ignore') ? 'selected' : ''; ?>>🤦‍♂️ I set reminders and still ignore them</option>
              <option value="forget" <?php echo ($user_details['std_usually'] === 'forget') ? 'selected' : ''; ?>>😵‍💫 I don’t even remember to set reminders</option>
              <option value="lose-notes" <?php echo ($user_details['std_usually'] === 'lose-notes') ? 'selected' : ''; ?>>📝 I write it down but lose the notes</option>
              <option value="rely-on-memory" <?php echo ($user_details['std_usually'] === 'rely-on-memory') ? 'selected' : ''; ?>>⏰ I rely on my memory (and fail miserably)</option>
            </select>

            <!-- What’s your most common “Oops! I forgot” moment? -->
            <img src="https://em-content.zobj.net/source/apple/391/melting-face_1fae0.png" class="w-7 h-7 absolute left-[-37px] top-[40.5%] transform -translate-y-1/2" alt="">
            <label for="std_oops">What’s your most common “Oops! I forgot” moment?</label>
            <select id="std_oops" name="std_oops" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
              <option value="deadlines" <?php echo ($user_details['std_oops'] === 'deadlines') ? 'selected' : ''; ?>>📅 Deadlines & assignments</option>
              <option value="birthdays" <?php echo ($user_details['std_oops'] === 'birthdays') ? 'selected' : ''; ?>>🎂 Birthdays & anniversaries</option>
              <option value="groceries" <?php echo ($user_details['std_oops'] === 'groceries') ? 'selected' : ''; ?>>🛒 Grocery shopping</option>
              <option value="medicine" <?php echo ($user_details['std_oops'] === 'medicine') ? 'selected' : ''; ?>>💊 Taking medicine</option>
              <option value="everything" <?php echo ($user_details['std_oops'] === 'everything') ? 'selected' : ''; ?>>🚀 Everything, honestly!</option>
            </select>

            <!-- When do you want us to remind you? -->
            <img src="https://em-content.zobj.net/source/apple/391/handshake_light-skin-tone_1f91d-1f3fb_1f3fb.png" class="w-7 h-7 absolute left-[-37px] top-[52%] transform -translate-y-1/2" alt="">
            <label for="std_reminder">When do you want us to remind you?</label>
            <select id="std_reminder" name="std_reminder" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
              <option value="morning" <?php echo ($user_details['std_reminder'] === 'morning') ? 'selected' : ''; ?>>🌅 Morning vibes (7 AM - 10 AM)</option>
              <option value="midday" <?php echo ($user_details['std_reminder'] === 'midday') ? 'selected' : ''; ?>>🌞 Midday focus (12 PM - 3 PM)</option>
              <option value="evening" <?php echo ($user_details['std_reminder'] === 'evening') ? 'selected' : ''; ?>>🌙 Evening chill (6 PM - 9 PM)</option>
              <option value="night" <?php echo ($user_details['std_reminder'] === 'night') ? 'selected' : ''; ?>>🦉 Night owl mode (After 10 PM)</option>
            </select>

            <!-- How do you want to receive reminders? -->
            <img src="https://em-content.zobj.net/source/apple/391/man-genie_1f9de-200d-2642-fe0f.png" class="w-7 h-7 absolute left-[-37px] top-[63%] transform -translate-y-1/2" alt="">
            <label for="std_method">How do you want to receive reminders?</label>
            <select id="std_method" name="std_method" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
              <option value="app" <?php echo ($user_details['std_method'] === 'app') ? 'selected' : ''; ?>>🔔 App notifications</option>
              <option value="email" <?php echo ($user_details['std_method'] === 'email') ? 'selected' : ''; ?>>📩 Email alerts</option>
              <option value="sms" <?php echo ($user_details['std_method'] === 'sms') ? 'selected' : ''; ?>>📱 SMS reminders</option>
              <option value="wake-up" <?php echo ($user_details['std_method'] === 'wake-up') ? 'selected' : ''; ?>>🔊 A loud wake-up call (Just kidding! Or maybe not? 😆)</option>
            </select>

            <!-- What’s your productivity vibe? -->
            <img src="https://em-content.zobj.net/source/apple/391/nerd-face_1f913.png" class="w-7 h-7 absolute left-[-37px] top-[74%] transform -translate-y-1/2" alt="">
            <label for="std_productivity">What’s your productivity vibe?</label>
            <select id="std_productivity" name="std_productivity" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400">
              <option value="organized" <?php echo ($user_details['std_productivity'] === 'organized') ? 'selected' : ''; ?>>🎯 Super organized</option>
              <option value="sometimes" <?php echo ($user_details['std_productivity'] === 'sometimes') ? 'selected' : ''; ?>>😎 I get things done (eventually)</option>
              <option value="procrastinator" <?php echo ($user_details['std_productivity'] === 'procrastinator') ? 'selected' : ''; ?>>🔥 Procrastination king/queen</option>
            </select>

            <!-- One thing you absolutely don’t want to forget? -->
            <label for="important">One thing you absolutely don’t want to forget?</label>
            <textarea id="important" name="important" class="w-full p-3 bg-gray-200 mt-2 outline-none focus:ring-2 focus:ring-zinc-400"><?php echo htmlspecialchars($user_details['important']); ?></textarea>

            <!-- Save Changes Button -->
            <button type="submit" class="w-full bg-gray-500 text-white p-3 hover:bg-gray-600 cursor-pointer">
              Save Changes
            </button>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>