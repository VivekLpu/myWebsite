<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>

    <?php
    session_start();
    
    echo "Welcome ".$_SESSION["username"];
    echo "<br>You are the ".$_SESSION["user_desig"];
    if(isset($_POST["logout"])){
        session_unset();
        session_destroy();
    }
    
    ?>
</body>
</html>