<?php
/*
precedence of operator::
exponential >> modulus >> Division >> Mutltiplication >> Addition >> Substraction
*/

$num1 = 9;
$num2 = 4;
$a = 10;

//perform a series of operation
echo "<h1> Operator Precedence </h1>";
$result1 = $num1 + $num2 * 2;
$result2 = ($num1 + $num2) * 2;
echo "<h3>Num1 = 9, Num2 = 4</h3> Num1 + Num2 * 2 =  $result1 <br>";
echo "(Num1 + Num2) * 2 =  $result2 <br>";

//Bitwise AND(&) has higher precedence than OR (|)
$b = 4 | 2 & 1;
echo "4 | 2 & 1 = $b <br>";

//Addition(+) has higher priority than Equality(==)
$c = 5 == 3 + 2;
echo "5 == 3 + 2 : $c <br>";

//Ternary Operator
$x =10; $y = 8; $z=5;
$result3 = $x + $y * $z >= 20 ? $x++ : --$y+$z ;
echo "Result of Ternary Operator: $result3 <br>";

//complex expression to test precedence and associativity
$x = 4; $y = 2; $z = 3;
$result4 = $x + $y * $z ** $y / $x - $y % $z;

echo "Result of complex expression  : $result4 <br>";

//String Operators
 $x = "Hello";
 $y = " World!";
 echo $x.$y."<br>";

 //write a php script to check whether number is even or add using ternary operator
 $x = 40;

$checkEvenOdd = $x % 2 == 0 ? "Number: $x is even <br>" : "Number: $x is odd <br>";
echo "$checkEvenOdd";

//Null coalescing
echo $status = $user ?? 'anonymous';
echo "<br>";

$user = "Michael";
echo $status = $user ?? 'anonymous';
echo "<br>"; 

//write a php script to print first  non-null variable using null coalesing operator
$a =null; $b = null; $c= 56; $d= null;
$result5 = $a ?? $b ?? $c ?? $d;
echo "First non-null character: $result5 <br>";

//Ternary Operator with nested condition
$result6 = $a ?($b ? "Both true" : "A is true, B is false") : ($c > 5 ? "A is false, c < 5" : "A is false, c >= 5");
echo "Result of nested ternary operator: $result6 <br>";

//Logical Operator
//write a php script take year as an input & check whether it is leap year or not

function checkLeapYear($year){
    if($year / 400){
        if($year / 100){
            if($year / 4){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }
}
$year = 2025;
if($year){
    echo "$year is a leap year. <br>";
}else{
    echo "$year is not a leap year. <br>";
}

?>