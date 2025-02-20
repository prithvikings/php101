<?php
$name=array("Manoj","Rahul","Aneesh");
$marks=array(90,80,70);

//array_combine() function is used to create a new array by combining two arrays.
$c=array_combine($name,$marks);
print_r($c);

//array_chunk() function is used to split an array into parts.
$courses=array("PHP","JAVA","C++","PYTHON","C#","HTML");
print_r(array_chunk($courses,3));
//preserve keyword in array_chunk() function is used to preserve the keys of the array.


$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);  // Output: 3 
//count() function is used to count the number of elements in an array.
?>