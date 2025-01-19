<?php
//function is a block of code that performs a specific task.

//syntax: function functionName(){
//          code to be executed;
//        }

function  greet(){
    echo "Hello, World!<br>";
}

function add($num1, $num2){
    $sum = $num1 + $num2;
    echo "The sum of $num1 and $num2 is $sum<br>";
}

function is_even($number){
   return $number %2== 0;
}


greet(); //calling the function
add(3,2); //calling the function
if(is_even(7)){
    echo "number is even";
}else{
    echo ("number is odd");
}
?>