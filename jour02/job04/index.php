<?php

for ($i = 0; $i <= 100; $i++) {
    if ($i %3== 0) {
        echo "fizz" . "<br>";
        } 

    elseif ($i %5== 0) {
        echo "buzz". "<br>";
    }
    elseif ($i %3== 0 && $i %5== 0) {
        echo "Fizzbuzz". "<br>";
    }
    else {
        echo $i . "<br>";
    }
    
    
    }

    
?>