<?php
session_start();

// Check if the user is logged in and has not already voted
if (!isset($_SESSION['data']) || $_SESSION['status'] == 'voted') {
    // Redirect to dashboard if already voted or not logged in
    header("Location: dashboard.php");
    exit();
}

if (isset($_GET['group_id'])) {
    $group_id = $_GET['group_id'];
    $_SESSION['selected_group'] = $group_id; // Save the selected group in session
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Voting System - Vote for Group</title>
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
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold mb-4">Vote for a Group</h1>

            <form action="../action/voting_action.php" method="POST">
                <div class="mb-6">
                    <h2 class="text-2xl mb-2">Select a Group</h2>
                    <select name="group_id" class="bg-gray-700 text-white px-4 py-2 rounded-lg w-full">
                        <!-- Dynamically load groups from the session -->
                        <?php
                        $group = isset($_SESSION['group']) ? $_SESSION['group'] : [];
                        foreach ($group as $g) {
                            echo '<option value="' . htmlspecialchars($g['id']) . '">' . htmlspecialchars($g['username']) . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition ease-in-out duration-300">Vote</button>
            </form>
        </div>
    </div>

</body>

</html>
