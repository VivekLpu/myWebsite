<?php
echo "Today's date is : ";
$today = date("d/m/Y");
echo $today."<br>";

$age = array("Peter"=>35, "Ben"=>37, "joe"=>43);
echo json_encode($age)."<br>";

$jsonobj = '{"Peter":35,"Ben":37,"joe":43}';
var_dump(json_decode($jsonobj));
echo "<br>";

//CREATE A FUNCTION THAT ACCEPTS A VARIABLE NUMBER OF ARGUMENTS USING THE OPERATOR (VARIADIC FUNCTION LIKE (...$u)).
function multiply(...$nums){
    $mul = 1;

    foreach($nums as $num){
        $mul *= $num;
    }
    return $mul;
}

echo "Multiplication of 3,4: ". multiply(3,4)."<br>";
echo "Multiplication of 3,4,5: ". multiply(3,4,5)."<br>";
echo "Multiplication of 2,3,4,5: ". multiply(2,3,4,5)."<br>";
?>
