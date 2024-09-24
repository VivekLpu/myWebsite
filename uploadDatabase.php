<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    echo $_SERVER["SERVER_NAME"];
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "kn database";
    $conn = new mysqli($server_name,$user_name,$password,$db_name);
    if(mysqli_connect_error()){
        echo "Failed to connect to MySQL: "."<br>";
    }
    ?>
</body>
</html>