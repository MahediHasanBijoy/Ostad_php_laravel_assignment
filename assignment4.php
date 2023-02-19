<?php

/* 
 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.) 
*/

// function sortByLength($a, $b){
//     if(strlen($a)==strlen($b)){
//         return 0;
//     }
//     return strlen($a)-strlen($b);
// }

// $strings = ['apple', 'date', 'mango', 'watermelon', 'jackfruit', 'banana'];

// usort($strings, "sortByLength");

// print_r($strings);



/*
 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string. 
*/

// function concateString($str1, $str2){
//     return $str1.$str2;
// }

// echo concateString("hello wolrd", "my name is bijoy");

/* 
 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
*/

// function removeElement($array){
//     array_shift($array);
//     array_pop($array);
//     return $array;
// }

// $array = [1,2,3,4,5,6,7,8,9];

// $newArray = removeElement($array);
// print_r($newArray);

/*
 4.Write a PHP function to check if a string contains only letters and whitespace.
*/

function onlyLettersWhitespace($string)
{
    $formatString = "abcdefghijklmnopqrstuvwxyz ";
    $lettersAndWhitespace = str_split($formatString);

    $stringLength = strlen($string);

    for ($i = 0; $i < $stringLength; $i++) {
        if (!in_array($string[$i], $lettersAndWhitespace)) {
            echo "String has invalid characters";
            return;
        }
    }
    echo "String has only letters and whitespace";
}

// function call
onlyLettersWhitespace("hello world 12");

/*
 5.Write a PHP function to find the second largest number in an array of numbers. 
*/

 // function secondLargest($numbers){
//     rsort($numbers);
//     return $numbers[1];
// }

// $numbers = [2,1,3,5,4,11,21,8,7];

// echo secondLargest($numbers);   // output: 11
