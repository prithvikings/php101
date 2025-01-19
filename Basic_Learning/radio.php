<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Selection</title>
</head>

<body>
    <!-- A form to allow users to select a credit card type using radio buttons -->
    <form action="radio.php" method="post">
        <!-- Each radio button allows the user to select one credit card option -->
        <input type="radio" name="credit_card" value="visa">Visa<br>
        <input type="radio" name="credit_card" value="mastercard">MasterCard<br>
        <input type="radio" name="credit_card" value="americanexp">American Express<br>
        <input type="submit" name="submit" value="Submit"> <!-- The submit button to send the form data -->
    </form>
</body>

</html>

<?php
// Check if the form is submitted
if (isset($_POST["submit"])) {
    // Check if a radio button is selected
    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"]; // Retrieve the selected value
        echo "You have selected: $credit_card"; // Display the selected value
    } else {
        echo "Please select a credit card"; // Prompt user if no selection is made
    }
}
?>
