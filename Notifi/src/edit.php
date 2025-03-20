<?php
session_start();
include('../actions/connect.php');

// Redirect to login if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ./login.php");
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
    <style>
      /* Custom scrollbar */
      .custom-scrollbar::-webkit-scrollbar {
        width: 8px;
      }
      .custom-scrollbar::-webkit-scrollbar-track {
        background: #2D2D42;
      }
      .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #E0614A;
        border-radius: 4px;
      }
    </style>
  </head>
  <body>
    <main class="bg-[#1E1E2E] min-h-screen w-full text-white font-[mulish] text-[#E4E4E7] relative">
      <!-- Logout and Fine-Tune Buttons -->
      <a href="../actions/logout.php" class="absolute right-10 top-5 px-4 py-2 bg-[#e0614a] hover:bg-[#c95844] rounded-sm font-medium">
        Logout <i class="ri-logout-box-r-line text-white text-lg"></i>
      </a>
      <a href="./dashboard.php" class="absolute right-40 top-5 px-4 py-2 bg-[#e0614a] hover:bg-[#c95844] rounded-sm font-medium flex items-center justify-center gap-2">
        Dashboard <i class="ri-dashboard-line text-white text-lg"></i>
      </a>

      <!-- Edit Profile Section -->
      <div class="w-full p-4 pt-10 pl-12 rounded-sm flex flex-col justify-start items-start gap-4">
        <div class="w-full flex gap-2 items-center">
          <img src="https://em-content.zobj.net/source/apple/391/kissing-face-with-closed-eyes_1f61a.png" class="w-7 h-7" alt="">
          <h1 class="text-xl font-normal font-[gilroy]">Hey <?php echo htmlspecialchars($user['user_name']); ?>, let's fine-tune your profile!</h1>
        </div>
      </div>

      <!-- Edit Form -->
      <div class="w-full flex flex-col gap-4 items-start justify-start p-4 pt-5 pl-12">
        <h1 class="text-xl font-semibold font-[gilroy]">Edit Your Profile</h1>
        <form class="space-y-4 w-full max-w-2xl" action="./edit.php" method="POST">
          <!-- What describes you best? -->
          <div class="flex flex-col gap-2">
            <label for="std_best">What describes you best?</label>
            <select id="std_best" name="std_best" class="w-full p-3 bg-[#2D2D42] border border-[#3E3E5E] rounded-sm focus:outline-none focus:border-[#E0614A]">
              <option value="student" <?php echo ($user_details['std_best'] === 'student') ? 'selected' : ''; ?>>🎓 Student</option>
              <option value="working" <?php echo ($user_details['std_best'] === 'working') ? 'selected' : ''; ?>>💼 Working Professional</option>
              <option value="other" <?php echo ($user_details['std_best'] === 'other') ? 'selected' : ''; ?>>🏠 Other</option>
            </select>
          </div>

          <!-- What’s your age bracket? -->
          <div class="flex flex-col gap-2">
            <label for="std_age">What’s your age bracket?</label>
            <select id="std_age" name="std_age" class="w-full p-3 bg-[#2D2D42] border border-[#3E3E5E] rounded-sm focus:outline-none focus:border-[#E0614A]">
              <option value="under18" <?php echo ($user_details['std_age'] === 'under18') ? 'selected' : ''; ?>>🌱 Under 18</option>
              <option value="18-25" <?php echo ($user_details['std_age'] === '18-25') ? 'selected' : ''; ?>>🔥 18-25</option>
              <option value="26-35" <?php echo ($user_details['std_age'] === '26-35') ? 'selected' : ''; ?>>🚀 26-35</option>
              <option value="36+" <?php echo ($user_details['std_age'] === '36+') ? 'selected' : ''; ?>>🏆 36+</option>
            </select>
          </div>

          <!-- How do you usually forget things? -->
          <div class="flex flex-col gap-2">
            <label for="std_usually">How do you usually forget things?</label>
            <select id="std_usually" name="std_usually" class="w-full p-3 bg-[#2D2D42] border border-[#3E3E5E] rounded-sm focus:outline-none focus:border-[#E0614A]">
              <option value="ignore" <?php echo ($user_details['std_usually'] === 'ignore') ? 'selected' : ''; ?>>🤦‍♂️ I set reminders and still ignore them</option>
              <option value="forget" <?php echo ($user_details['std_usually'] === 'forget') ? 'selected' : ''; ?>>😵‍💫 I don’t even remember to set reminders</option>
              <option value="lose-notes" <?php echo ($user_details['std_usually'] === 'lose-notes') ? 'selected' : ''; ?>>📝 I write it down but lose the notes</option>
              <option value="rely-on-memory" <?php echo ($user_details['std_usually'] === 'rely-on-memory') ? 'selected' : ''; ?>>⏰ I rely on my memory (and fail miserably)</option>
            </select>
          </div>

          <!-- What’s your most common “Oops! I forgot” moment? -->
          <div class="flex flex-col gap-2">
            <label for="std_oops">What’s your most common “Oops! I forgot” moment?</label>
            <select id="std_oops" name="std_oops" class="w-full p-3 bg-[#2D2D42] border border-[#3E3E5E] rounded-sm focus:outline-none focus:border-[#E0614A]">
              <option value="deadlines" <?php echo ($user_details['std_oops'] === 'deadlines') ? 'selected' : ''; ?>>📅 Deadlines & assignments</option>
              <option value="birthdays" <?php echo ($user_details['std_oops'] === 'birthdays') ? 'selected' : ''; ?>>🎂 Birthdays & anniversaries</option>
              <option value="groceries" <?php echo ($user_details['std_oops'] === 'groceries') ? 'selected' : ''; ?>>🛒 Grocery shopping</option>
              <option value="medicine" <?php echo ($user_details['std_oops'] === 'medicine') ? 'selected' : ''; ?>>💊 Taking medicine</option>
              <option value="everything" <?php echo ($user_details['std_oops'] === 'everything') ? 'selected' : ''; ?>>🚀 Everything, honestly!</option>
            </select>
          </div>

          <!-- When do you want us to remind you? -->
          <div class="flex flex-col gap-2">
            <label for="std_reminder">When do you want us to remind you?</label>
            <select id="std_reminder" name="std_reminder" class="w-full p-3 bg-[#2D2D42] border border-[#3E3E5E] rounded-sm focus:outline-none focus:border-[#E0614A]">
              <option value="morning" <?php echo ($user_details['std_reminder'] === 'morning') ? 'selected' : ''; ?>>🌅 Morning vibes (7 AM - 10 AM)</option>
              <option value="midday" <?php echo ($user_details['std_reminder'] === 'midday') ? 'selected' : ''; ?>>🌞 Midday focus (12 PM - 3 PM)</option>
              <option value="evening" <?php echo ($user_details['std_reminder'] === 'evening') ? 'selected' : ''; ?>>🌙 Evening chill (6 PM - 9 PM)</option>
              <option value="night" <?php echo ($user_details['std_reminder'] === 'night') ? 'selected' : ''; ?>>🦉 Night owl mode (After 10 PM)</option>
            </select>
          </div>

          <!-- How do you want to receive reminders? -->
          <div class="flex flex-col gap-2">
            <label for="std_method">How do you want to receive reminders?</label>
            <select id="std_method" name="std_method" class="w-full p-3 bg-[#2D2D42] border border-[#3E3E5E] rounded-sm focus:outline-none focus:border-[#E0614A]">
              <option value="app" <?php echo ($user_details['std_method'] === 'app') ? 'selected' : ''; ?>>🔔 App notifications</option>
              <option value="email" <?php echo ($user_details['std_method'] === 'email') ? 'selected' : ''; ?>>📩 Email alerts</option>
              <option value="sms" <?php echo ($user_details['std_method'] === 'sms') ? 'selected' : ''; ?>>📱 SMS reminders</option>
              <option value="wake-up" <?php echo ($user_details['std_method'] === 'wake-up') ? 'selected' : ''; ?>>🔊 A loud wake-up call (Just kidding! Or maybe not? 😆)</option>
            </select>
          </div>

          <!-- What’s your productivity vibe? -->
          <div class="flex flex-col gap-2">
            <label for="std_productivity">What’s your productivity vibe?</label>
            <select id="std_productivity" name="std_productivity" class="w-full p-3 bg-[#2D2D42] border border-[#3E3E5E] rounded-sm focus:outline-none focus:border-[#E0614A]">
              <option value="organized" <?php echo ($user_details['std_productivity'] === 'organized') ? 'selected' : ''; ?>>🎯 Super organized</option>
              <option value="sometimes" <?php echo ($user_details['std_productivity'] === 'sometimes') ? 'selected' : ''; ?>>😎 I get things done (eventually)</option>
              <option value="procrastinator" <?php echo ($user_details['std_productivity'] === 'procrastinator') ? 'selected' : ''; ?>>🔥 Procrastination king/queen</option>
            </select>
          </div>

          <!-- One thing you absolutely don’t want to forget? -->
          <div class="flex flex-col gap-2">
            <label for="important">One thing you absolutely don’t want to forget?</label>
            <textarea id="important" name="important" class="w-full p-3 bg-[#2D2D42] border border-[#3E3E5E] rounded-sm focus:outline-none focus:border-[#E0614A]"><?php echo htmlspecialchars($user_details['important']); ?></textarea>
          </div>

          <!-- Save Changes Button -->
          <button type="submit" class="w-full bg-[#E0614A] hover:bg-[#C95844] text-white p-3 rounded-sm font-medium">
            Save Changes
          </button>
        </form>
      </div>
    </main>
  </body>
</html>
