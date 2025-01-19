

<?php
/*
-Logical operators are used to combine conditional statements.

-There are three types of logical operators: AND, OR, and NOT.

1. AND operator is used to check if both conditions are true.

2. OR operator is used to check if at least one of the conditions is true.

3. NOT operator is used to check if the condition is false.

The following example shows how to use logical operators in PHP.
*/

$age = 18;
$citizen = false;

if ($age >= 18 && $citizen == true) {
    echo "You are eligible to vote <br>";
} else {
    echo "You are not eligible to vote <br>";
}

//let say we are a movie ticket seller and we want to give discount to our customers based on their age.
$child = true;
$senior = false;
$tickets = null;

if ($child == true || $senior == true) {
    $tickets = 7;
} else {
    $tickets = 10;
}
echo " Your ticket price is \${$tickets}";

