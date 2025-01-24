<?php
session_start();

if (!isset($_SESSION['data'])) {
    // Redirect to login page if session data is not set
    header("Location: ../index.php");
    exit();
}

$data = $_SESSION['data'];

if ($_SESSION['status'] == 'voted') {
    // Assign status as 'voted' and apply a green color
    $status = '<span class="text-[#50d71e] font-bold">Voted</span>';
} else {
    // Assign status as 'not voted' and apply a red color
    $status = '<span class="text-red-700 font-bold">Not Voted</span>';
}

$group = isset($_SESSION['group']) ? $_SESSION['group'] : [];
$votes = isset($_SESSION['votes']) ? $_SESSION['votes'] : [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Voting System - Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html,
        body {
            height: 100%;
            width: 100%;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-gray-900 to-black text-white py-8 px-6">

    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <a href="../" class="flex items-center bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition ease-in-out duration-300">
                <span class="material-icons">arrow_back</span>
                <span class="ml-2 font-semibold">Back</span>
            </a>
            <a href="./logout.php" class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition ease-in-out duration-300">
                Logout
            </a>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold mb-4">Voting System</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Group Section -->
                <?php
                $group = isset($_SESSION['group']) ? $_SESSION['group'] : [];

                if (!empty($group)) {
                    foreach ($group as $g) {
                        echo '<div class="flex items-center space-x-4 mb-4">';
                        echo '<img src="../Images/' . htmlspecialchars($g['image']) . '" alt="Group Image" class="w-16 h-16 rounded-full object-cover">';
                        echo '<div>';
                        echo '<strong class="text-white">Group Name:</strong><br>';
                        echo '<span class="text-gray-300">' . htmlspecialchars($g['username']) . '</span><br>';
                        echo '<strong class="text-white">Votes:</strong><br>';
                        echo '<span class="text-gray-300">' . htmlspecialchars($g['votes']) . '</span>';
                        echo '</div>';
                        
                        // If user hasn't voted, show the vote button
                        if ($_SESSION['status'] != 'voted') {
                            echo '<form action="voting.php" method="get">';
                            echo '<input type="hidden" name="group_id" value="' . htmlspecialchars($g['id']) . '">';
                            echo '<button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition ease-in-out duration-300">Vote</button>';
                            echo '</form>';
                        } else {
                            echo '<button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 cursor-not-allowed transition ease-in-out duration-300" disabled>Voted</button>';
                        }

                        echo '</div>';
                    }
                } else {
                    echo '<p class="text-gray-300">No group data available.</p>';
                }
                ?>

                <!-- Profile Section -->
                <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-blue-400 mb-3">Profile Info</h2>
                    <div class="flex items-center space-x-4">
                        <img src="../Images/<?php echo isset($data['image']) ? htmlspecialchars($data['image']) : 'default.png'; ?>" 
                             alt="User Image" class="w-16 h-16 rounded-full object-cover">
                        <div>
                            <strong class="text-white">Name:</strong><br>
                            <span class="text-gray-300"><?php echo htmlspecialchars($data['username']); ?></span><br>
                            <strong class="text-white">Mobile:</strong><br>
                            <span class="text-gray-300"><?php echo htmlspecialchars($data['phone']); ?></span><br>
                            <strong class="text-white">Status:</strong><br>
                            <span><?php echo $status; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
