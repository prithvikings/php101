<?php

//Associative arrays - Arrays made up of key-value pairs

//An associative array stores each element with a named key.
//The key is used to access the element.
//The key is unique to each element in the array.
//The key can be a string or an integer.
//The value can be any data type.
//The key-value pairs are stored in a specific order, but the order is not guaranteed to be
//the same as the order in which they were added.

$capital = array(
    "USA" => "Washington DC",
    "Japan" => "Tokyo",
    "India" => "New Delhi",
    "UK" => "London",
    "France" => "Paris"
);
//Accessing an element in an associative array
//To access an element in an associative array, you use the key.
//The syntax is: $arrayName['key']
echo $capital['USA']; //Washington DC

//$capital['USA'] = "New York"; //change the value of an element
//$capital['China'] = "Beijing"; //add a new element
//unset($capital['UK']); //remove an element
//echo count($capital); //count the number of elements in an array
//print_r($capital); //display the elements in an array
//array_pop($capital); //remove the last element of an array
//array_push($capital, "Berlin"); //add an element to the end of an array
//array_shift($capital); //remove the first element of an array
//array_unshift($capital, "Moscow"); //add an element to the beginning of an array
//sort($capital); //sort an array in ascending order
//rsort($capital); //sort an array in descending order
//ksort($capital); //sort an array by key in ascending order
//krsort($capital); //sort an array by key in descending order
//asort($capital); //sort an array by value in ascending order
//arsort($capital); //sort an array by value in descending order
//$keys = array_keys($capital); //get the keys of an array
//$values = array_values($capital); //get the values of an array
//$reverse = array_reverse($capital); //reverse the order of the elements in an array
//$flip = array_flip($capital); //exchange the keys with the values
//$merge = array_merge($capital, $fruits); //merge two arrays

foreach ($capital as $key => $value) {
    echo "<br>The capital of $key is $value ";
}

?>