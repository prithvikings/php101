<?php
//Hashing transforming sensitive data (password) into letter, numbers and/or symbols. via mathematical process. (similar to encryption) hides the original data from 3rd party.

$password = "password";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;
//Password_Default:- bcrypt algorithm note that this constant is designed to change over time as new and stronger algorithms are added to PHP. for that reason the length of the result from using this identifier can change over time. therefore, it is recommended to store the result in a database column that can expand beyond 60 characters (255 characters would be a good choice).

if(password_verify("lala",$hash)){
    echo "<br>password is correct";
}else{
    echo "<br>password is incorrect";
}

?>