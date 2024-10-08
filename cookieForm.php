<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action=" ">
        Enter username: <input type="text" name="user" placeholder="Enter Username"><br>
        <input type="Submit" name="set" value="SET COOKIE"><br>
        <input type="Submit" name="display" value="DISPLAY"><br>
        <input type="Submit" name="delete" value="DELETE COOKIE">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["set"])) {
        $username = $_POST["user"];
        setcookie("username", $username, time() + 86400, "/");  // Set cookie for 1 day
        if (isset($_COOKIE["username"])) {
            echo "Username is set as Cookie Value";
        } else {
            echo "Failed to set cookie.";
        }
    }
    
    if (isset($_POST["display"])) {
        if (isset($_COOKIE["username"])) {
            echo "The value of the username is " . $_COOKIE["username"];
        } else {
            echo "No username cookie found.";
        }
    }
    
    if (isset($_POST["delete"])) {
        setcookie("username", "", time() - 3600, "/");  // Expire the cookie
        echo "The cookie username is deleted";
    }
}

?>
</body>
</html>