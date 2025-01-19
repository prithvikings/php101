<?php
/*
Switch-: The switch statement is used to perform different actions based on different conditions.
it is similar to if else statement but it is more readable and more efficient when you have multiple conditions.
*/

$grade="A";

switch( $grade ) {
    case "A" || 'a':
        echo"You did great!";
        break;
    case "B" || 'b':
        echo "You did good!";
        break;
    case "C" || 'c':
        echo "You did okay!";
        break;
    case "D" || 'd':
        echo "You did poorly!";
        break;
    case "F" || 'f':
        echo "You failed!";
        break;
    default:
        echo "Invalid grade!";
        break;
        
}
?>