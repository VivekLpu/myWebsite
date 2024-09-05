<?php
function add($x, $y){
    $z = $x + $y;
    return $z;
}

echo add(4,5)."<br>";

//call by value

function change_name($nm){
    echo "Intially name is $nm<br>";
    $nm = $nm."_new";
    echo "This functin changes the name to $nm <br>";
}


$name = "John";
echo "My name is $name <br>";
change_name($name);
echo "My name is still $name <br>";


function multiply(){
    $args = func_get_args();
    $mul = 1;

    foreach($args as $num){
        $mul *= $num;
    }
    return $mul;
}

echo "Multiplication of 3,4: ". multiply(3,4)."<br>";
echo "Multiplication of 3,4,5: ". multiply(3,4,5)."<br>";
echo "Multiplication of 2,3,4,5: ". multiply(2,3,4,5)."<br>";


?>