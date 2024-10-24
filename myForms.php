<?php
$form_data = [];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $full_name = $_POST["fullname"];
    $mobno = $_POST["mobno"];
    $email =$_POST["email"];
    $pass = $_POST["pass"];
    if(empty($full_name) || !preg_match("/^[A-Za-z]+$/",$full_name)){
        $errors["fullname"]="Name is empty or invalid<br>";
    }else{
        $form_data["fullname"]=$full_name;
    }
    if(empty($mobno || !preg_match("/^[0-9]+$/"),$mobno)){
        $errors["mobno"] = "Mobile Number is empty or invalid<br>";
    }else{
        $mobno["mobno"] = $mobno;
    }
    if(empty($pass || !preg_match("/^[A-Za-z0-9]+$/"),$pass)){
        $errors["pass"] = "Password is empty or invalid<br>";
    }else{
        $pass["pass"] = $pass;
    }
}
?>