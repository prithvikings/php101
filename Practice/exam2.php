
<?php
//Question-1 of Pattern
    $num = 15;
    for ($i = 5; $i >= 1; $i--) { 
        for ($j = 0; $j < $i; $j++) {
            echo $num-- . " ";
        }
        echo "\n"; 
    }


?>
