<?php
$filePath = urldecode($_GET['file']);
$companyName = urldecode($_GET['company']);

// Debug file path
echo "File Path: " . $filePath . "<br>";
if (!file_exists($filePath)) {
    die("File does not exist.");
}

// Read file content
$fileContent = file_get_contents($filePath);

// Gemini API endpoint and key
$apiKey = 'AIzaSyBorUgiWRYL3DaaAdLt2oRmTRXLIRD6_p8';
$apiUrl = "https://generativelanguage.googleapis.com/v1/models/gemini-pro:generateContent?key=$apiKey";

// Prepare the request data
$data = [
    'contents' => [
        [
            'parts' => [
                ['text' => 'Analyze the management integrity based on the following transcript:'],
                ['text' => $fileContent]
            ]
        ]
    ]
];

// Use curl for API request
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
if (curl_errno($ch)) {
    die("API request failed: " . curl_error($ch));
}
curl_close($ch);

// Debug API response
echo "API Response: " . $response . "<br>";

$result = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Invalid API response.");
}

// Extract the analysis result
$analysisResult = $result['candidates'][0]['content']['parts'][0]['text'];

// Redirect to results page
header("Location: results.php?result=" . urlencode($analysisResult));
exit();
?>
