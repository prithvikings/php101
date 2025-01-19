

<?php

//operator precedence
//1. Parentheses
//2. Exponents
//3. Multiplication and Division
//4. Addition and Subtraction


//String
    $name="Prithvi";
    $food="Pizza";
    $email="fake123@gmail.com";


//Integers
    $age=20;
    $users=2;
    $quantity=3;

//float
    $price=10.99;
    $discount=0.5;

//boolean
    $is_logged_in=true;
    $is_admin=false;


    echo "Hello World! My name is $name <br>";
    echo "You Like $food<br>";
    echo "Your email is $email<br>";

    echo "You are $age years old<br>";
    echo "There are $users users online<br>";
    echo "You have $quantity items in your cart<br>";

    echo "The price is $$price<br>";
    echo "The discount is $discount %<br>";

    echo "Are you logged in? $is_logged_in<br>";
    echo "Are you an admin? $is_admin<br>";

    echo "You have ordered $quantity $food for $$price each<br>";
    echo "The total price is $".$quantity*$price."<br>";
?>