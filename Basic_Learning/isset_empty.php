<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_empty.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password: </label>
        <input type="text" name="password" id="password"><br>
        <input type="submit" value="Submit"><br>
    </form>
</body>
</html>

<?php

//isset() function is used to check if a variable is set and is not NULL.
//syntax: isset($variable)
//returns true if the variable is set and not NULL, otherwise it returns false.

//empty() function is used to check if a variable is empty.
//A variable is considered empty if it does not exist or if its value equals false.
//syntax: empty($variable)
//returns true True if the variable is not declared , false, null or an empty string, otherwise it returns false.

foreach($_POST as $key => $value){
    if(isset($value) && !empty($value)){
        echo "$key: $value <br>";
    }
    else{
        echo "$key is empty <br>";
    }
}
?>