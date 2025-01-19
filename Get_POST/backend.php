<?php

$item="pizza";
$price=10;
$qty=$_POST['quantity'];
$total=$price*$qty;
echo "You have ordered {$qty}x {$item} <br>";
echo "Your total is {$total}";
?>