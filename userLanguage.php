<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Select the Language: 
        <select name="lang">
            <option value="eng">English</option>
            <option value="french">Malayalam</option>
            <option value="malayalam">French</option>
        </select>
        <input type="submit" value="SET LANGUAGE"><form>
    </form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["submit"])){
        $pref_lang=$_POST["lang"];
        setcookie("preflag",$pref_lang,time()+(7*86400)+"/");
        header('Location: mygreetings.php');
        exit;
    }
}
?>
</body>
</html>