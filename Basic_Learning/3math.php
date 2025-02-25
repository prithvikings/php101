<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="3math.php" method="post">
        <label>x:</label>
        <input type="text" name="x" id="">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
$x=$_POST['x'];
$total=null;

if($x==null){
    echo "Please enter a number";
}
else{
    $total=abs($x); //abs() is a built-in function that returns the absolute value of a number
    echo "The absolute value of {$x} is {$total} <br>";

    $total=sqrt($x); //sqrt() is a built-in function that returns the square root of a number
    echo "The square root of {$x} is {$total} <br>";

    $total=round($x); //round() is a built-in function that rounds a number to the nearest integer
    echo "The rounded value of {$x} is {$total} <br>";

    $total=ceil($x); //ceil() is a built-in function that rounds a number up to the nearest integer
    echo "The ceiling value of {$x} is {$total} <br>";

    $total=floor($x); //floor() is a built-in function that rounds a number down to the nearest integer
    echo "The floor value of {$x} is {$total} <br>";

    $total=pow($x,2); //pow() is a built-in function that returns the value of a number raised to the power of another number
    echo "The square of {$x} is {$total} <br>";

    $total=exp($x); //exp() is a built-in function that returns the exponential value of a number
    echo "The exponential value of {$x} is {$total} <br>";

    $total=log($x); //log() is a built-in function that returns the natural logarithm of a number
    echo "The natural logarithm of {$x} is {$total} <br>";

    $total=log10($x); //log10() is a built-in function that returns the base-10 logarithm of a number
    echo "The base-10 logarithm of {$x} is {$total} <br>";

    $total=sin($x); //sin() is a built-in function that returns the sine of a number
    echo "The sine of {$x} is {$total} <br>";

    $total=cos($x); //cos() is a built-in function that returns the cosine of a number
    echo "The cosine of {$x} is {$total} <br>";

    $total=tan($x); //tan() is a built-in function that returns the tangent of a number
    echo "The tangent of {$x} is {$total} <br>";

    $total=asin($x); //asin() is a built-in function that returns the arcsine of a number
    echo "The arcsine of {$x} is {$total} <br>";

    $total=acos($x); //acos() is a built-in function that returns the arccosine of a number
    echo "The arccosine of {$x} is {$total} <br>";

    $total=atan($x); //atan() is a built-in function that returns the arctangent of a number
    echo "The arctangent of {$x} is {$total} <br>";

    $total=pi(); //pi() is a built-in function that returns the value of pi
    echo "The value of pi is {$total} <br>";

    $total=rand(1,10); //rand() is a built-in function that generates a random number
    echo "A random number between 1 and 10 is {$total} <br>";

    $total=max(1,2,3,4,5); //max() is a built-in function that returns the highest value in a list of numbers
    echo "The maximum value is {$total} <br>";

    $total=min(1,2,3,4,5); //min() is a built-in function that returns the lowest value in a list of numbers
    echo "The minimum value is {$total} <br>";

}
echo "The square of {$x} is ".($x*$x);
?>