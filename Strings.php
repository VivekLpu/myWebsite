<?php

function checkPalindrome($string){
    //convert string to lowercase
    $lowercaseString = strtolower($string);

    //convert string to uppercase
    $uppercaseString = strtoupper($string);

    //check if the lowercase string is a palindrome;
    $reversedString = strrev($lowercaseString);
    $ispalindrome = ($lowercaseString === $reversedString);

    //output the results
    echo "Original String: ". $string. "<br>";
    echo "Reversed String: ". $reversedString. "<br>";
    if($ispalindrome){
        echo "This String is palindrome<br>";
    }else{
        echo "This String is not a palindrome<br>";
    }
}

checkPalindrome("Naman");

function findMaxMin($array){
    //check if the array is empty
    if(!empty($array)){
        //find the maximum value in the array
        $maxValue = max($array);

        //Find the minimum value in the array
        $minValue = min($array);

        //output the results
        echo "Maximum Value in the array: $maxValue <br>";
        echo "Minimum Value in the array: $minValue <br>";
    }else{
        echo "The array is empty.\n";
    }
}

findMaxMin([45,34,65,78,54,12,75,87,89,54]);

$a = null;
var_dump($a);
?>