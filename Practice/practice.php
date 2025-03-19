<?php
// Q  Create a php program to check if a string is a palindrome

$str="nooN";
$str=strtolower($str);
if($str===strrev($str)){
    echo "Yes it is palindrom";
}else{
    echo "No it is not a palindrom";
}
?>


<?php
// 5. Write a PHP program to remove duplicate values from an array which contains only strings or only integers.
//same code for if we have to return only unique values from an array of strings
$array=[10,101,20,20,60,20,60,50,70];
$unique_array=array_unique($array);
print_r($unique_array);
?>

<?php
// Write program to remove spaces from a string
$str="Hello World";
echo str_replace(" ","",$str);

?>


<!-- //replace a single word in a string -->
<?php
$text = "I love apples!";
$newText = str_replace("apples", "bananas", $text);
echo $newText; // Output: I love bananas!
?>

<!-- //replace multiple words in a string -->
<?php
$text = "I love apples and apples are tasty.";
$newText = str_replace(["apples", "tasty"], ["bananas", "delicious"], $text);
echo $newText; // Output: I love bananas and bananas are delicious.
?>


<!-- //replace multiple words in a string and count the number of replacements made -->
<?php
$text = "Hello world! Welcome to the world!";
$count = 0;
$newText = str_replace("world", "PHP", $text, $count);
echo $newText; // Output: Hello PHP! Welcome to the PHP!
echo "\nReplacements made: " . $count; // Output: 2
?>

<!-- 
Write a PHP script to get the last three characters of a string.
Sample String : 'rayy@example.com'
Expected Output : 'com' -->
<?php
$str="rayy@example.com";
$substr=substr($str,-3);
echo $substr;
?>

<?php
for ($i = 97; $i <= 122; $i++) { // ASCII values for 'a' to 'z'
    echo chr($i);
}
?>


<?php
$str = "082307";
$formattedTime = substr($str, 0, 2) . ":" . substr($str, 2, 2) . ":" . substr($str, 4, 2);

echo $formattedTime;
?>


<!-- convert an array into a key-value pair associative array. -->
<?php
$keys = ["name", "age", "city"];
$values = ["Alice", 25, "New York"];

$assocArray = array_combine($keys, $values);

print_r($assocArray);
?>

<?php
$matrix = [
    [1, 4, 5, 6],
    [4, 6, 3, 1],
    [9, 3, 1, 4],
    [1, 0, 1, 2]
];

$size = count($matrix); // Get matrix size (4x4)
$sum = 0;

for ($i = 0; $i < $size; $i++) {
    $sum += $matrix[$i][$i]; // Sum of primary diagonal
}

echo "Sum of diagonal elements: " . $sum;
?>


<?php
$size = 5; // Size of the square

for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        if ($i == 0 || $i == $size - 1 || $j == 0 || $j == $size - 1) {
            echo "* ";
        } else {
            echo "  ";
        }
    }
    echo "\n";
}
?>



<!-- 

Function	Purpose
array_splice()	Removes/replaces elements from an array
array_chunk()	Splits an array into smaller chunks
array_merge()	Merges multiple arrays into one
count()	Counts total elements in an array
array_count_values()	Counts occurrences of each value in an array
array_reverse()	Reverses the array order -->


<!-- Take input of 2d array from user run the loop & print the element with for each loop -->
<?php
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
$size = count($matrix); 
for ($i = 0; $i < $size; $i++) {
    foreach ($matrix[$i] as $value) {
        echo $value . " ";
    }
    echo "\n";
}

?>

<?php
//Apply operation on the above matrix and make each element 2x
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$size = count($matrix);
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        $matrix[$i][$j] *= 2;
    }
}

for ($i = 0; $i < $size; $i++) {
    foreach ($matrix[$i] as $value) {
        echo $value . " ";
    }
    echo "\n";
}
?>

<?php

//Add a to each element of the matrix
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
$size = count($matrix);
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        $matrix[$i][$j] += 9;
    }
}
for ($i = 0; $i < $size; $i++) {
    foreach ($matrix[$i] as $value) {
        echo $value . " ";
    }
    echo "\n";
}
?>