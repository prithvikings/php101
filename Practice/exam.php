<?php
//Question2-calculate final marks
function calculateFinalMarks($totalMarks, $bonus, $penalty) {
    $finalMarks = ($totalMarks + $bonus) - $penalty;
    return $finalMarks;
}

echo "Enter Total Marks: ";
$totalMarks = trim(fgets(STDIN));

echo "Enter Bonus Marks: ";
$bonus = trim(fgets(STDIN));

echo "Enter Penalty Marks: ";
$penalty = trim(fgets(STDIN));

$finalMarks = calculateFinalMarks($totalMarks, $bonus, $penalty);

echo "Answer : Final Marks: $finalMarks\n";
?>



