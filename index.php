<?php
// // This is my first PHP script.
// echo "Hello World! <br>";

// // Declaring variables
// $x = 10;
// $y = 2;
// $sum = $x + $y; 
// $diff = $x - $y; 
// $mul = $x * $y; 
// $div = $x / $y; 
// $mod = $x % $y; 
// $pow = $x ** $y; 

// //displaying variables
// echo "<br>Sum: " . $sum; 
// echo "<br>Difference: " . $diff;
// echo "<br>Product: " . $mul;
// echo "<br>Remainder: ". $mod;
// echo "<br>Division: " . $div;
// echo "<br>Power: " . $pow;
// echo "<br>";

// //display datatype of variables
// var_dump($sum) ;

//write a script to check the variable is integer or not
//also check it is positive,negative or zero

$a = 50;
$b = 3.14;


if(is_int($a)){
    if($a>0){
        echo "Positive Integer<br>";
    }else if($x<0){
        echo "Negative Integer<br>";
    }else{
        echo "Zero<br>";
    }
}else{
    echo "Not an Integer<br>";
}

//write a php script to calculate the percentage and grade of students in five subject

$physics = 78.6;
$maths = 65.9;
$chemistry = 80;
$english = 87;
$history = 90;

$totalMarks = ($physics + $maths + $chemistry + $english + $history);
$percentage = ($totalMarks / 500) * 100;
echo "Percentage of Student: ". $percentage. "%<br>";

if($percentage >= 90){
    echo "Grade of Student: Outstanding<br>";
}else if($percentage >= 80 && $percentage < 90){
    echo "Grade of Student: Excellent<br>";
}else if($percentage >= 70 && $percentage < 80){
    echo "Grade of Student: Very Good<br>";
}else if($percentage >= 50 && $percentage < 70){
    echo "Grade of Student: Good <br>";
}else if($percentage >= 30 && $percentage < 50){
    echo "Grade of Student: Average<br>";
}else{
    echo "Grade of Studebt: Fail<br>";
}

//calculate the area of circle, square , rectange and triangle

//area of Circle
$radius = 5;
$areaCircle = pi() * $radius * $radius;
echo "Area of Circle: ".$areaCircle."<br>";

//area of Rectangle
$length = 10;
$breadth = 5;
$areaRectangle = $length * $breadth;
echo "Area of Rectangle: ". $areaRectangle. "<br>";

//area of Square
$side = 15;
$areaSquare = $side * $side;
echo "Area of Square: ". $areaSquare. "<br>";

//area of Triangle
$base = 4;
$height = 13;
$areaTriangle = 0.5 * $base * $height;
echo "Area of Triangle: ". $areaTriangle. "<br>";

//TypeCasting
//cast Float to Integer
$p = 89.94584;
echo "Before TypeCasting: ".$p. "<br>";
$int_p = (int) $p;
echo "After TypeCasting: ".$int_p. "<br>";

$name = "Gulzaar is a good boy ";
$title = " Shayar";
echo "Length of String: ". strlen($name). "<br>";
echo "Word Count in String: ".str_word_count($name). "<br>";
echo "Reverse of String: ". strrev($name). "<br>";
echo "Position of String: ". strpos($name, "good"). "<br>";
echo "Replacing the String: ". str_replace("boy","poet",$name). "<br>";
echo "Repeating the String: ". str_repeat($name, 4). "<br>";
echo "<pre>";
echo "rtrim: ". rtrim("       this is a good boy      "). "<br>";
echo "ltrim: ". ltrim("       this is a good boy      "). "<br>";
echo "</pre>";
?>
