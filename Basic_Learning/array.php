<?php
//Arrays are used to store multiple values in a single variable.

//In PHP, there are three types of arrays:
//1. Indexed arrays
//2. Associative arrays
//3. Multidimensional arrays

//Indexed arrays - Arrays with a numeric index
//Associative arrays - Arrays with named keys
//Multidimensional arrays - Arrays with multiple levels of arrays

//Indexed arrays
//An indexed array stores each element with a numeric index.
//The index can be assigned automatically (index always starts at 0), like this:

$fruits=array("Apple","Banana","Orange","Mango");

//You can also assign the index manually, like this:

// $fruits[0]="Pineapple";


// array_push($fruits,"Grapes"); //add an element to the end of an array

// array_pop($fruits); //remove the last element of an array

// array_shift($fruits); //remove the first element of an array

// array_unshift($fruits,"Strawberry"); //add an element to the beginning of an array

// $reverse=array_reverse($fruits); //reverse the order of the elements in an array

// $length=count($fruits); //count the number of elements in an array

foreach($fruits as $fruit){
    echo"".$fruit."<br>";
}

?>