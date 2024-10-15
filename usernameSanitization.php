<!DOCTYPE html>
<?php
$error=" ";
$msg =" ";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["user"];
    if(empty($username) || (!preg_match("/^[A-Za-z0-9_]+$/",$username))){
        $error = "Username is Invalid<br>";
    }else{
        $msg = "Your Username is $username <br>";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter Username:
        <input type="text" name="user" placeholder="Enter Username" id=""><br>
        <span style="color: red;">
            <?php echo $error ?>
        </span>
        <span style="color: green;">
            <?php echo $msg ?>
        </span>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>