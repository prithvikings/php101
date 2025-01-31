
<?php


// connection building
// verification of connection
// select the db
// fetch data from form
// insert data into db
// verification whether the data is inserted or not


// Database connection

$con = mysqli_connect("127.0.0.1", "root", "", "", 3309);
    // Use password if required

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select database
if (!mysqli_select_db($con, 'k23Tb')) {
    die("Database not selected");
}

// Fetch form data safely
$name =  $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare the SQL query
$sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email','$password')";

if (!mysqli_query($con, $sql)) {
    echo "Not Inserted: " . mysqli_error($con);
} else {
    echo "Inserted";
}

// Close connection
mysqli_close($con);
?>
