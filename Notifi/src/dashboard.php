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
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
  <title>Dashboard</title>
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

    /* Pop-up Box Styles */
    .popup-box {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #2D2D42;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    .popup-box h2 {
      margin-bottom: 10px;
    }

    .popup-box p {
      margin-bottom: 20px;
    }

    .popup-box button {
      background-color: #E0614A;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 10px;
    }

    .popup-box button:hover {
      background-color: #C95844;
    }
  </style>
</head>

<body>
  <main class="bg-[#1E1E2E] min-h-screen w-full text-white font-[mulish] text-[#E4E4E7] relative">
    <!-- Logout and Fine-Tune Buttons -->
    <div class="hidden md:flex">
    <a href="../actions/logout.php" class="absolute right-10 top-5 px-4 py-2 bg-[#e0614a] hover:bg-[#c95844] rounded-sm font-medium">
      Logout <i class="ri-logout-box-r-line text-white text-lg"></i>
    </a>
    <a href="./edit.php" class="absolute right-40 top-5 px-4 py-2 bg-[#e0614a] hover:bg-[#c95844] rounded-sm font-medium flex items-center justify-center gap-2">
      Fine-Tune <i class="ri-user-settings-line text-white text-lg"></i>
    </a>
    </div>

    <!-- Welcome Section -->
    <div class="w-full p-2 pt-5 pl-8 md:p-4 md:pt-10 md:pl-12 rounded-sm flex flex-col justify-start items-start gap-4">
      <div class="w-full flex gap-2 items-center">
        <img src="https://em-content.zobj.net/source/apple/391/kissing-face-with-closed-eyes_1f61a.png" class="w-7 h-7" alt="">
        <h1 class="text-xl font-normal font-[gilroy]">Hey <?php echo htmlspecialchars($user['user_name']); ?>, ready to conquer your day?</h1>
      </div>
      <p class="text-sm w-1/2 md:w-1/4 italic font-light">
        Your greatest asset is your earning ability. Your greatest resource is your time.
        <span class="not-italic font-semibold">-Brian Tracy</span>
      </p>
    </div>

    <!-- Task Categories -->
    <div class="w-full flex gap-4 items-start justify-start p-4 pl-6 md:p-4 md:pt-5 md:pl-12">
      <button onclick="filterTasks('all')" class="px-4 py-2 bg-[#2D2D42] hover:bg-[#3E3E5E] rounded-sm">All</button>
      <button onclick="filterTasks('personal')" class="px-4 py-2 bg-[#2D2D42] hover:bg-[#3E3E5E] rounded-sm">Personal</button>
      <button onclick="filterTasks('work')" class="px-4 py-2 bg-[#2D2D42] hover:bg-[#3E3E5E] rounded-sm">Work</button>
      <button onclick="filterTasks('study')" class="px-4 py-2 bg-[#2D2D42] hover:bg-[#3E3E5E] rounded-sm">Study</button>
    </div>

    <!-- Add Task Section -->
    <div class="w-full flex flex-col gap-4 items-start justify-start pl-6 p-4 md:p-4 md:pt-5 md:pl-12">
      <div class="w-full flex items-center gap-5">
        <h1 class="text-xl font-semibold font-[gilroy]">No last-minute rush, <?php echo htmlspecialchars($user['user_name']); ?>! Here’s what’s coming up. </h1>
        <img src="https://em-content.zobj.net/source/apple/391/raising-hands_medium-light-skin-tone_1f64c-1f3fc_1f3fc.png" class="w-8 h-8" alt="">
      </div>
      <!-- Add Task Input -->
      <div class="w-full max-w-2xl">
        <div class="flex flex-col md:flex-row gap-2">
          
          <input
            type="text"
            id="taskInput"
            placeholder="Add a new task..."
            class="w-full p-2 bg-[#2D2D42] border border-[#3E3E5E] rounded-sm focus:outline-none focus:border-[#E0614A]" />
        
          <input
            type="time"
            id="taskTime"
            class="p-2 bg-[#2D2D42] border border-[#3E3E5E] rounded-sm focus:outline-none focus:border-[#E0614A]" />
          <select
            id="taskPriority"
            class="p-2 bg-[#2D2D42] border border-[#3E3E5E] rounded-sm focus:outline-none focus:border-[#E0614A]">
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
          </select>
          <select
            id="taskCategory"
            class="p-2 bg-[#2D2D42] border border-[#3E3E5E] rounded-sm focus:outline-none focus:border-[#E0614A]">
            <option value="personal">Personal</option>
            <option value="work">Work</option>
            <option value="study">Study</option>
          </select>
          <button
            onclick="addTask()"
            class="px-4 py-2 bg-[#E0614A] hover:bg-[#C95844] rounded-sm font-medium">
            Add
          </button>
        </div>
      </div>

      <!-- Task List -->
      <div id="taskList" class="w-full max-w-2xl custom-scrollbar overflow-y-auto max-h-96">
        <!-- Tasks will be dynamically added here -->
      </div>
    </div>

    <!-- Smart Reminders Section -->
    <div class="w-full flex flex-col gap-4 items-start justify-start p-4 pl-6  md:p-4 md:pt-5 md:pl-12">
      <h1 class="text-xl font-semibold font-[gilroy]">Smart Reminders 🔥</h1>
      <div class="w-full max-w-2xl bg-[#2D2D42] p-4 rounded-sm">
        <p id="smartReminderText" class="text-sm">AI suggests scheduling your tasks in the morning for better productivity.</p>
        <button onclick="getSmartInfo()" class="px-4 py-2 bg-[#E0614A] hover:bg-[#C95844] rounded-sm font-medium mt-4">
          Get Smart Info
        </button>
      </div>
    </div>

    <!-- Audio Element for Notification Sound -->
    <audio id="notificationSound" src="../assets/naan_khatai.mp3" preload="auto"></audio>

    <!-- Pop-Up Box -->
    <div id="popupBox" class="popup-box">
      <h2 id="popupTaskText">Task Details</h2>
      <p id="popupTaskDetails">Details will be displayed here.</p>
      <button onclick="stopNotificationSound()">Stop Sound</button>
      <button onclick="snoozeTask()">Snooze</button>
    </div>
  </main>
  <!-- JavaScript for To-Do List -->
  <script>
    let tasks = [];
    let currentCategory = 'all';
    let currentTaskIndex = null;

    // Function to add a new task
    // Function to add a new task
    async function addTask() {
      const taskInput = document.getElementById('taskInput');
      const taskTime = document.getElementById('taskTime');
      const taskPriority = document.getElementById('taskPriority');
      const taskCategory = document.getElementById('taskCategory');
      const taskText = taskInput.value.trim();
      const time = taskTime.value;
      const priority = taskPriority.value;
      const category = taskCategory.value;

      if (taskText === "") {
        alert("Please enter a task!");
        return;
      }

      try {
        // Send the task data to the backend
        const response = await fetch('../actions/add_task.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: `task_text=${encodeURIComponent(taskText)}&task_time=${encodeURIComponent(time)}&task_priority=${encodeURIComponent(priority)}&task_category=${encodeURIComponent(category)}`,
        });

        const result = await response.json();

        if (result.success) {
          // Add the task to the local array and update the UI
          tasks.push({
            id: result.id,
            text: taskText,
            time,
            priority,
            category,
            completed: false
          });
          filterTasks(currentCategory);
          taskInput.value = ""; // Clear input
        } else {
          alert("Failed to add task: " + result.message);
        }
      } catch (error) {
        console.error("Error adding task:", error);
        alert("An error occurred while adding the task. Please try again.");
      }
    }

    // Function to render tasks
    function renderTasks(filteredTasks) {
      const taskList = document.getElementById('taskList');
      taskList.innerHTML = ""; // Clear existing tasks

      filteredTasks.forEach((task) => {
        const taskElement = document.createElement('div');
        taskElement.className = "flex items-center justify-between p-2 bg-[#2D2D42] rounded-sm mb-2";

        // Checkbox for task completion
        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.checked = task.completed;
        checkbox.className = "form-checkbox h-5 w-5 text-[#E0614A] rounded-sm";
        checkbox.addEventListener('change', () => toggleTask(task.id));

        // Task text, time, priority, and category
        const taskText = document.createElement('span');
        taskText.className = task.completed ? "line-through text-gray-400" : "text-white";
        taskText.textContent = `${task.text} (${task.time}, ${task.priority}, ${task.category})`;

        // Buttons for task actions
        const buttonsContainer = document.createElement('div');
        buttonsContainer.className = "flex gap-2";

        const snoozeButton = createButton('ri-time-line', () => snoozeTask(task.id));
        const rescheduleButton = createButton('ri-calendar-todo-line', () => rescheduleTask(task.id));
        const editButton = createButton('ri-edit-line', () => editTask(task.id));
        const deleteButton = createButton('ri-delete-bin-line', () => deleteTask(task.id));

        buttonsContainer.append(snoozeButton, rescheduleButton, editButton, deleteButton);

        // Append elements to the task container
        const taskContent = document.createElement('div');
        taskContent.className = "flex items-center gap-2";
        taskContent.append(checkbox, taskText);

        taskElement.append(taskContent, buttonsContainer);
        taskList.appendChild(taskElement);
      });
    }

    // Helper function to create buttons
    function createButton(iconClass, onClickHandler) {
      const button = document.createElement('button');
      button.className = "text-gray-400 hover:text-white";
      button.innerHTML = `<i class="${iconClass}"></i>`;
      button.addEventListener('click', onClickHandler);
      return button;
    }


    // Function to filter tasks by category
    function filterTasks(category) {
      currentCategory = category;
      const filteredTasks = category === 'all' ? tasks : tasks.filter(task => task.category === category);
      renderTasks(filteredTasks);
    }

    // Function to toggle task completion
    async function toggleTask(id) {
      const task = tasks.find(task => task.id === id);
      if (!task) return;

      try {
        const response = await fetch('../actions/update_task.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: `task_id=${id}&completed=${!task.completed}`,
        });

        const result = await response.json();

        if (result.success) {
          task.completed = !task.completed;
          filterTasks(currentCategory);
        } else {
          alert("Failed to update task: " + result.message);
        }
      } catch (error) {
        console.error("Error updating task:", error);
        alert("An error occurred while updating the task. Please try again.");
      }
    }

    // Function to snooze a task
    function snoozeTask() {
      const notificationSound = document.getElementById('notificationSound');
      notificationSound.pause();
      notificationSound.currentTime = 0;

      const newTime = prompt("Snooze task to (HH:MM):", tasks[currentTaskIndex].time);
      if (newTime !== null && newTime.trim() !== "") {
        tasks[currentTaskIndex].time = newTime.trim();
        filterTasks(currentCategory);
        document.getElementById('popupBox').style.display = 'none';
      }
    }

    // Function to reschedule a task
    function rescheduleTask(index) {
      const newTime = prompt("Reschedule task to (HH:MM):", tasks[index].time);
      if (newTime !== null && newTime.trim() !== "") {
        tasks[index].time = newTime.trim();
        filterTasks(currentCategory);
      }
    }

    // Function to edit a task
    function editTask(index) {
      const newText = prompt("Edit your task:", tasks[index].text);
      if (newText !== null && newText.trim() !== "") {
        tasks[index].text = newText.trim();
        filterTasks(currentCategory);
      }
    }

    // Function to delete a task
    async function deleteTask(id) {
      if (confirm("Are you sure you want to delete this task?")) {
        try {
          const response = await fetch('../actions/delete_task.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `task_id=${id}`,
          });

          const result = await response.json();

          if (result.success) {
            tasks = tasks.filter(task => task.id !== id);
            filterTasks(currentCategory);
          } else {
            alert("Failed to delete task: " + result.message);
          }
        } catch (error) {
          console.error("Error deleting task:", error);
          alert("An error occurred while deleting the task. Please try again.");
        }
      }
    }

    // Function to check task times and play notification sound
    function checkTaskTimes() {
      const now = new Date();
      const currentTime = now.getHours().toString().padStart(2, '0') + ':' + now.getMinutes().toString().padStart(2, '0');

      tasks.forEach((task, index) => {
        if (task.time === currentTime && !task.completed) {
          const notificationSound = document.getElementById('notificationSound');
          notificationSound.play().catch(error => {
            console.error("Error playing notification sound:", error);
          });

          const popupBox = document.getElementById('popupBox');
          const popupTaskText = document.getElementById('popupTaskText');
          const popupTaskDetails = document.getElementById('popupTaskDetails');

          popupTaskText.innerText = task.text;
          popupTaskDetails.innerText = `Time: ${task.time}, Priority: ${task.priority}, Category: ${task.category}`;
          popupBox.style.display = 'block';
          currentTaskIndex = index;
        }
      });
    }

    // Function to stop the notification sound
    function stopNotificationSound() {
      const notificationSound = document.getElementById('notificationSound');
      notificationSound.pause();
      notificationSound.currentTime = 0;
      document.getElementById('popupBox').style.display = 'none';
    }

    // Function to get smart info using Gemini API
    async function getSmartInfo() {
  const smartReminderText = document.getElementById('smartReminderText');
  smartReminderText.innerHTML = "Processing your tasks with AI...";

  try {
    // Prepare the prompt for Gemini API
    const taskList = tasks.map(task => `- ${task.text} (Priority: ${task.priority}, Category: ${task.category}, Time: ${task.time})`).join('\n');
    const prompt = `You are a productivity assistant. Analyze the following tasks and provide a concise summary (within 200 words) with key points and a table. Tasks:\n${taskList}`;

    // Call the Gemini API
    const response = await fetch('https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=AIzaSyBorUgiWRYL3DaaAdLt2oRmTRXLIRD6_p8', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        contents: [
          {
            parts: [
              { text: prompt }
            ]
          }
        ]
      }),
    });

    if (!response.ok) {
      throw new Error('Network response was not ok');
    }

    const data = await response.json();
    const aiResponse = data.candidates[0].content.parts[0].text;

    // Format the AI response into HTML
    const formattedResponse = formatResponse(aiResponse);

    // Display the formatted AI-generated summary
    smartReminderText.innerHTML = formattedResponse;
  } catch (error) {
    console.error('Error fetching smart info:', error);
    smartReminderText.innerHTML = "Failed to fetch smart info. Please try again later.";
  }
}

// Function to format the AI response into HTML
function formatResponse(response) {
  let html = '';
  const lines = response.split('\n');
  let inList = false; // Track if we're inside a list
  let inSublist = false; // Track if we're inside a nested list
  let inTable = false; // Track if we're inside a table

  lines.forEach((line) => {
    line = line.trim();

    // Handle headings (e.g., ## Task Summary)
    if (line.startsWith('## ')) {
      html += `<h2 class="text-lg font-semibold mt-4">${line.replace('## ', '')}</h2>`;
    }
    // Handle bold text (e.g., **Efficiency Suggestions**)
    else if (line.startsWith('**') && line.endsWith('**')) {
      html += `<p class="font-bold mt-2">${line.replace(/\*\*/g, '')}</p>`;
    }
    // Handle tables (e.g., | Task | Priority | ...)
    else if (line.includes('|')) {
      if (!inTable) {
        html += '<table class="w-full border-collapse border border-gray-600 mt-4">';
        inTable = true;
      }
      // Table header
      if (line.startsWith('|') && line.endsWith('|') && line.includes('---')) {
        html += '<thead><tr>';
        line.split('|').slice(1, -1).forEach(cell => {
          html += `<th class="border border-gray-600 p-2">${cell.trim()}</th>`;
        });
        html += '</tr></thead><tbody>';
      }
      // Table rows
      else if (line.startsWith('|')) {
        html += '<tr>';
        line.split('|').slice(1, -1).forEach(cell => {
          html += `<td class="border border-gray-600 p-2">${cell.trim()}</td>`;
        });
        html += '</tr>';
      }
    }
    // Handle numbered lists (e.g., 1. Prioritize High-Impact Tasks First)
    else if (/^\d+\./.test(line)) {
      if (!inList) {
        html += '<ol class="list-decimal list-inside mt-2">';
        inList = true;
      }
      html += `<li class="mt-1">${line.replace(/^\d+\./, '').trim()}</li>`;
    }
    // Handle unordered lists (e.g., * Sub-item 1)
    else if (line.startsWith('* ')) {
      if (!inSublist) {
        html += '<ul class="list-disc list-inside ml-4">';
        inSublist = true;
      }
      html += `<li class="mt-1">${line.replace('* ', '').trim()}</li>`;
    }
    // Handle paragraphs
    else if (line !== '') {
      // Close any open lists or tables
      if (inSublist) {
        html += '</ul>';
        inSublist = false;
      }
      if (inList) {
        html += '</ol>';
        inList = false;
      }
      if (inTable) {
        html += '</tbody></table>';
        inTable = false;
      }
      // Convert bold text within paragraphs (e.g., **bold text**)
      line = line.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
      // Convert italic text within paragraphs (e.g., *italic text*)
      line = line.replace(/\*(.*?)\*/g, '<em>$1</em>');
      html += `<p class="mt-2">${line}</p>`;
    }
  });

  // Close any open lists or tables
  if (inSublist) {
    html += '</ul>';
  }
  if (inList) {
    html += '</ol>';
  }
  if (inTable) {
    html += '</tbody></table>';
  }

  return html;
}
    // Check task times every minute
    setInterval(checkTaskTimes, 60000);

    // Initial render
    filterTasks(currentCategory);


    // Fetch tasks from the database on page load
    async function fetchTasks() {
      try {
        const response = await fetch('../actions/fetch_tasks.php');
        const data = await response.json();
        tasks = data.map(task => ({
          id: task.id,
          text: task.text,
          time: task.time,
          priority: task.priority,
          category: task.category,
          completed: task.completed,
        }));
        filterTasks(currentCategory);
      } catch (error) {
        console.error("Error fetching tasks:", error);
        alert("An error occurred while fetching tasks. Please try again.");
      }
    }

    fetchTasks(); // Call the function on page load
  </script>
</body>

</html>