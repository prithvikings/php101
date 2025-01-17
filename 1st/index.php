<?php 
echo "Enter the first number: ";
$num1=fgets(STDIN);
echo "Enter the second number: ";
$num2=fgets(STDIN);
$sum=$num1+$num2;
echo `The sum of the two numbers is: $sum \n` ;
echo gettype($sum);

?>