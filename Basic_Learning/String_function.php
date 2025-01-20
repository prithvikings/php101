<?php

$username = "Rahul kumar";
$username = strtolower($username); //rahul
echo $username;
echo "<br>";
echo strtoupper($username); //RAHUL
echo "<br>";
echo ucfirst($username); //Rahul kumar
echo "<br>";
echo ucwords($username); //Rahul Kumar
echo "<br>";
echo strrev($username); //ramuk luhar
echo "<br>";
echo str_shuffle($username); //lRahumkual
echo "<br>";
echo str_word_count($username); //2
echo "<br>";
echo str_repeat($username, 2); //Rahul kumarRahul kumar
echo "<br>";
echo str_replace("Rahul", "Rahul Kumar", $username); //Rahul Kumar kumar
echo "<br>";
echo str_ireplace("rahul", "Rahul Kumar", $username); //Rahul Kumar kumar
echo "<br>";
echo substr($username, 0, 5); //Rahul
echo "<br>";
echo substr($username, 6); //kumar
echo "<br>";
echo substr($username, -5); //kumar
echo "<br>";
echo strlen($username); //11
echo "<br>";
echo strpos($username, "kumar"); //6
echo "<br>";
echo stripos($username, "kumar"); //6
echo "<br>";
echo strrpos($username, "kumar"); //6
echo "<br>";
echo strripos($username, "kumar"); //6
echo "<br>";
echo trim($username); //Rahul kumar
echo "<br>";
echo str_pad($username, 20, "*"); //Rahul kumar**********
echo "<br>";
echo strcmp($username, "RahUl kumaR"); //1

echo "<br>";
echo explode(" ", $username); //Array ( [0] => Rahul [1] => kumar )
echo "<br>";
echo implode(" ", explode(" ", $username)); //Rahul kumar


?>