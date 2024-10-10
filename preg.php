<?php
$str = "hello World!";
$pattern = "/HELLO/i"; // Case Insensitive match for "hello"

if (preg_match($pattern, $str)) {
    echo "Match Found!<br>";
} else {
    echo "No Match Found!<br>";
}

$string = "Cats and dogs are animals. Dogs bark, cats meow.";
$pattern = "/cats|dogs/i";
preg_match_all($pattern, $string, $matches);

foreach ($matches[0] as $match) {
    echo "Matched: " . $match . "<br>";
}

function validate_int ($value){
    $pattern = '/^(100|[1-9]?[0-9])$/';
    if(preg_match($pattern,$value)){
        echo "$value is a valid integer between 0 and 100<br>";
    }else{
        echo "$value is not a valid integer between 0 and 100<br>";
    }
}

validate_int("50");
validate_int("100");
validate_int("0");
validate_int("#");
?>
