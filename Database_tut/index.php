<?php

//Two way to connect php with mysql:
//1. Using PDO (PHP Data Objects)
//2. Using MySQLi Extension (MySQL Improved) 

include("databasedb.php");
$username="Prithvi";
$password="password";
$hash=password_hash($password, PASSWORD_DEFAULT);

$sql="INSERT INTO users(username, password) VALUES('$username','$hash')";

try{
    mysqli_query($connection, $sql);
}catch(mysqli_sql_exception $err){
    echo "Error: $err";
}


mysqli_close($connection);

?>
