<?php
$db_server="localhost:3309";
$db_username="root";
$db_password="";
$db_name="votingsystem";
$conn="";


try{
    $conn =  mysqli_connect($db_server, $db_username, $db_password, $db_name);
}catch(Exception $e){
    echo "Error: ".$e->getMessage();
}

if(!$conn){
    echo "You are not connected to the database";
}
?>