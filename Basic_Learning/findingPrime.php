<?php 
echo "Enter the number: ";
$num=fgets(STDIN);
$flag=0;
if($num==1){
    echo "1 is neither prime nor composite";
}
else if($num==2){
    echo "2 is a prime number";
}
else{
for($i=2;$i<$num;$i++){
    if($num%$i==0){
        $flag=1;
        break;
    }
}
if($flag==0){
    echo $num." is a prime number";
}
else{
    echo $num." is not a prime number";
}
}
?>