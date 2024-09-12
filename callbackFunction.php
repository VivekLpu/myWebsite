<?php

$name = array("Ram","Shyam","Sita");
$str = array_map("callback",$name);
print_r($str);

function callback($name){
    return strlen($name);
}

?>