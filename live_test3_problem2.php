<?php
// Write a PHP function called gcd that takes two integer parameters a and b, and returns their greatest common divisor (GCD). The GCD is the largest positive integer that divides both a and b without leaving a remainder.

function gcd($a, $b){
    if($a>$b){
        $small = $b;
    }else{
        $small = $a;
    }
    $gcd = 1;
    for($i=1; $i<=$small; $i++){
        if($a%$i==0 && $b%$i==0){
            $gcd = $i;
        }
    }
    return $gcd;
}

echo gcd(24,8);