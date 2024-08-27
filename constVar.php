<?php
//area of the circle taking pi as an constant

const pi = 3.14;
define ("Gravity", 9.81);
const r = 5;
$area = pi * r * r;

echo "Area of circle: $area m<sup>2</sup> <br>";
echo "Gravity on Earth is " .number_format(Gravity,2) . " m/s<sup>2</sup> <br>";

//take two integers as a constant take a function add and use that and perform addition within the function 
const a = 50;
const b = 40;

function Add(){
    $sum = a + b;
    echo "Sum of Constant Variable a and b: $sum <br>";
}
Add();
?>
