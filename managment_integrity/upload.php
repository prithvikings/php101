<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $companyName = $_POST['companyName'];
    $file = $_FILES['concallFile'];

    // Validate file type and size
    $allowedTypes = ['text/plain', 'application/pdf'];
    $maxSize = 5 * 1024 * 1024; // 5MB

    if (in_array($file['type'], $allowedTypes) && $file['size'] <= $maxSize) {
        $uploadPath = 'uploads/' . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
            // Redirect to analysis page
            header("Location: analyze.php?file=" . urlencode($uploadPath) . "&company=" . urlencode($companyName));
            exit();
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "Invalid file type or size.";
    }
}
?>