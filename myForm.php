<!DOCTYPE html>
<?php
    $name_error = " ";
    $mob_no_error =" ";
    $email_error = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["submit"])){
            $username = $_POST["user"];
            $mob_no = $_POST["mobno"];
            $email = $_POST["email"];
            $pattern = "/^[A-Za-z]+$/";
            if(empty($username)){
                $name_error = "Username cannot remain empty<br>";
            }elseif(!preg_match($pattern, $username)){
                $name_error = "Invalid Username";
            }else{
                echo $username."<br>";
            }
            
            
            if(empty($mob_no)){
                $mob_no_error = "Mobile Number Cannot be Empty<br>";
            }elseif (!preg_match("/[0-9]/", $mob_no)){
                $mob_no_error = "Invalid Mobile Number<br>";  
            }elseif(strlen($mob_no) != 10){
                $mob_no_error = "Mobile Number must be of 10 digits<br>";
            }else{
                echo $mob_no."<br>";
            }

            if (empty($email)) {
                $email_error = "Email cannot remain empty<br>";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_error = "Invalid Email Address<br>";
            }else{
                echo $email."<br>";
            }
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
        Enter Username : <input type="text" name="user" placeholder="Enter Username" id="">
        <span style="color: red;">
            <?php
            echo  "$name_error";
            ?>
    
        </span>
        <br><br>

        Enter Mobile Number : <input type="number" name="mobno" placeholder="Enter Mobile Number" id="">
        <span style="color: red;">
            <?php
            echo  $mob_no_error
            ?>
    
        </span>
        <br><br>

        Enter Email Address: <input type="text" name="email" placeholder="Enter Email Address">
        <span style="color: red;"><?php echo $email_error; ?></span>

        <input type="submit" value="SUBMIT" name="submit">
    </form>

    
</body>
</html>