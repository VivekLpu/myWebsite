<?php

$x = 5;
$y = 10;

function add(){
    //Use Global Variable inside the function
    global $x, $y;
    return $x + $y;
}

//Call the function and print the result
$result = add();
echo $result."<br>";

//Use of Static Keyword
function myTest(){
    static $x = 0;
    echo $x."<br>";
    $x++;
}

myTest();
myTest();
myTest();


?>

