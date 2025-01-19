<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <!-- Add [] to the name attribute to allow multiple selections -->
        <input type="checkbox" name="fruits[]" value="Apple">Apple<br>
        <input type="checkbox" name="fruits[]" value="Mango">Mango<br>
        <input type="checkbox" name="fruits[]" value="Banana">Banana<br>
        <input type="checkbox" name="fruits[]" value="Litchi">Litchi<br>
        <input type="checkbox" name="fruits[]" value="Grapes">Grapes<br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
// Check if the form is submitted
if(isset($_POST["submit"])){
    // Check if any checkbox is selected
    if(!empty(($_POST["fruits"]))){
        foreach($_POST["fruits"] as $fruit){
            echo "You have selected: $fruit <br>";
        }
    }else{
        echo "Please select a fruit";
    }
}