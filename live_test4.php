<?php
// write a function to find the longest word in a string?

function longestWord($string){
    $words = explode(" ", $string);
    $maxLength = 0;
    $largeWord = '';
    foreach($words as $word){
        $wlength = strlen($word);
        if($wlength >= $maxLength){
            $maxLength = $wlength;
            $largeWord = $word;
        }
    }
    return $largeWord;
}

$str = "The quick brown fox jumped over the lazy dog";
echo longestWord($str);
echo "\n";


$str2 = "My name is Mahedi Hasan Bijoy";
echo longestWord($str2);