<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forloop.php" method="post">
        <label for="">Enter a number to count to: </label>
        <input type="text" name="counter">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php

//for loop is used to execute a block of code a number of times specified by the user. 
//it is used to iterate over a sequence (such as a list, tuple, dictionary, set, or string).
//syntax: for(initialization; condition; increment/decrement){
//          code to be executed;
//        }

$counter=$_POST['counter'];
for($i=1;$i<=$counter;$i++){
    echo "The number is: $i <br>";
}
?>