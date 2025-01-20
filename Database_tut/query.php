<?php
include("databasedb.php");
$sql="SELECT * FROM users WHERE username='Prithvi'";
$result=mysqli_query($connection, $sql);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    echo "Username: ".$row['username']."<br>";
    echo "id:" .$row['id']."<br>";
    echo "Registered date: " .$row['reg_date']."<br>";
}else{
    echo "No user found";
}
mysqli_close($connection);