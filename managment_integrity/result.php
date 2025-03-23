<?php
$analysisResult = urldecode($_GET['result']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analysis Results</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-8">Analysis Results</h1>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-gray-700"><?php echo nl2br($analysisResult); ?></p>
        </div>
    </div>
</body>
</html>