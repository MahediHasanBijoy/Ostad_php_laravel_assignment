<?php
/**
 * 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
 */

function evenOrOdd(int $n){
    if($n%2 == 0){
        return "even";
    }
    return "odd";
}

echo evenOrOdd(5);
echo "\n";
echo evenOrOdd(12);
echo "\n";

 /**
  * 2. 1+2+3...…….100  Write a loop to calculate the summation of the series
  */

$sum = 0;
for($i=1; $i<=100; $i++){
    $sum += $i;
}
echo $sum;