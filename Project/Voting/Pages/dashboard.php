<?php

session_start();
$data=$_SESSION['data'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Voting System- Dashboard</title>

    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: poppins;
        }
        html, body {
            height: 100%;
            width: 100%;
        }
        
    </style>
</head>

<body class=" bg-gray-800 my-5 text-white p-5 ">


    <div class="container flex flex-col gap-5">
        <div class="flex gap-5"><a href="../"><button class="rounded-lg bg-blue-600 text-white px-8 py-2 border-none flex  align-center justify-center focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50   mt-5 hover:bg-blue-700 transition-ease font-[600]">Back</button></a>
        <a href="./logout.php"><button class="rounded-lg bg-blue-600 text-white px-8 py-2 border-none flex  align-center justify-center focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50   mt-5 hover:bg-blue-700 transition-ease font-[600]">Logout</button></a></div>
        <h1 class="text-3xl ">Voting System</h1>

        <div class="row my-5">
            <div class="col-md-7">
                <!-- group -->
                <div class="row">
                    <div class="col-md-4">
                        <img src="" alt="Group image">
                    </div>
                    <div class="col-md-8">
                        <strong class="text-dark">Group Name:</strong> <br>
                        <strong class="text-dark h5">Votes</strong> <br>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-md-5">
                <!-- profile -->
                 <img src="" alt="User Image">
                 <br>
                 <br>
                 <strong class="text-dark">Name:</strong> <br><br>
                 <strong class="text-dark">Mobile:</strong> <br><br>
                 <strong class="text-dark">Status:</strong> <br><br>
            </div>
        </div>

        
    </div>
</body>

</html>