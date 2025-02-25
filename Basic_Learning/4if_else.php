<?php
$hours=50;
$rate=15;
$weekly_pay=null;

if($hours<=0){
    $weekly_pay=0;
}else if($hours<=40){
    $weekly_pay=$hours*$rate;
}else{
    $weekly_pay=($hours-40)*($rate*1.5)+$rate*40;
}
echo "Your weekly pay is \${$weekly_pay}";
?>