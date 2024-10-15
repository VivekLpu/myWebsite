<?php
$email = "vivekkr 8789@   gmail.com";
$sanit_email = filter_var($email,FILTER_SANITIZE_EMAIL);
echo "$sanit_email"."<br>";

if(filter_var($sanit_email,FILTER_VALIDATE_EMAIL)){
    echo "Email is Valid <br>";
}else{
    echo "Email is not valid<br>";
}
?>

