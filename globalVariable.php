<?php
function myFunction(){
    $GLOBALS["x"] = 100;
}

myFunction();
echo $GLOBALS["x"];
echo "<br>";
echo $x."<br>";
?>



