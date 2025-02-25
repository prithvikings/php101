<!-- Write a PHP script that inserts a new item in an array in any position. -->

<?php 
    $arr=array(
        "a"=>"apple",
        "b"=>"banana",
        "c"=>"cherry",
        "d"=>"date",
        "e"=>"eggfruit"
    );
    $pos=2;
    $item="blackberry";
    array_splice($arr,$pos,0,$item);
    print_r($arr);
?>




<!-- Write a PHP script that inserts a new item in an array at 3rd position./or ask position of element. -->


<?php 
$arr=array(1,2,3,4,5);
$pos=3;
$item = readline('Enter a value to push in 3: '); 
array_splice($arr,$pos-1,0,$item);
print_r($arr);
?>

<!-- 2. Write a PHP script to sort the following associative array -->

<?php 
$arr=array("Sophia"=>"31","Jacob"=>"41","
William"=>"39","Ramesh"=>"40");
asort($arr);
print_r($arr);
ksort($arr);
print_r($arr);
arsort($arr);
print_r($arr);
krsort($arr);
print_r($arr);
?>
<!-- 
3. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 
List of seven lowest temperatures : 60, 62, 63, 63, 64, 
List of seven highest temperatures : 76, 78, 79, 81, 85, -->

<?php 
$arr=array(
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    $avg=array_sum($arr)/count($arr);
    echo "Average Temperature is : ".$avg."\n";
    sort($arr);
    $lowest=array_slice($arr,0,7);
    echo "List of seven lowest temperatures : ";
    print_r($lowest);
?>

<!-- Identify duplicate marks in an associative array and print all the students with the same marks. -->
<?php 
$arr=array(
    "John"=>"90",
    "Ramesh"=>"80",
    "Suresh"=>"90",
    "Rajesh"=>"88",
    "Raj"=>"78",
);
$unique=array_unique($arr);
$duplicate=array_diff_assoc($arr,$unique);
print_r($duplicate);
?>

<!-- Ques. Pyramid Pattern
    *    
   ***   
  *****  
 ******* 
********* -->
<?php 
$n=5;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$n-$i;$j++){
        echo " ";
    }
    for($j=1;$j<=2*$i-1;$j++){
        echo "*";
    }
    echo "\n";
}
?>

<!-- Try this pattern
* * * * * 
*       * 
*       * 
*       * 
* * * * *  -->

<?php 
$n=5;
for($i=0;$i<$n;$i++){
    for($j=0;$j<$n;$j++){
        if($i==0 || ($i==$n-1) || $j==0 || ($j==$n-1)){
            echo "*";
        }else{
            echo " ";
        }
    }
    echo "\n";
}
?>