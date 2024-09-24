<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter Username: <input type="text" name="username" placeholder="Enter Username" required>
        Enter Password: <input type="password" name="password" placeholder="Enter Password" required>
        <input type="submit" value="Login" name="login">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $def_user = "admin";
        $def_pass = "123";
        if($username == $def_user && $password == $def_pass){
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["user_desig"] = "Assistant Professor";
            header('Location: adminWelcome.php');
        }
    }
?>

    

</body>
</html>