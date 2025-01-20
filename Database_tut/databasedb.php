<?php

$db_server="localhost:3309";
$db_username="root";
$db_password="";
$db_name="buisnessdb";
$connection="";
#mysqli_connect() function is used to establish a new connection to the MySQL server. It returns an object representing the connection to the MySQL server. 
//Syntax: mysqli_connect(servername, username, password, dbname);
//servername: Optional. Specifies the server to connect to. Default value is "localhost:3306"
//username: Optional. Specifies the MySQL username to use
//password: Optional. Specifies the MySQL password to use
//dbname: Optional. Specifies the default database to be used
//Note: This function returns FALSE on failure. 
//Note: This function is used to open a new connection to the MySQL server.

try{
    $connection =  mysqli_connect($db_server, $db_username, $db_password, $db_name);
}catch(Exception $e){
    echo "Error: ".$e->getMessage();
}

if($connection){
    echo "Connection established <br>";
}


?>