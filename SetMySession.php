<?php
session_start();
echo "My session Id is: ".session_id();
$_SESSION["username"]="Admin";
$_SESSION["userdesig"]="CEO of GOOGLE";
echo "<br>My session variables are set";
?>