<?php
$name = "PRINCE";
$food = "Rice";
$color = "Blue";
$age = 20;
$capital = ["Prithvi", "Rohit"]; // Corrected array declaration

echo "My name is {$name} <br>";
echo "I love eating {$food} <br>";
echo "My favorite color is {$color} <br>";
echo "I am $age years old <br>";

for ($i = 0; $i < count($capital); $i++) { // Using count() for flexibility
    echo $capital[$i] . "<br>";
}

if ($age >= 18) {
    echo "I am an adult";
} else {
    echo "I am a minor";
}
?>
