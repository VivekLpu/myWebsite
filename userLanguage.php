<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Select the Language:
        <select name="lang">
            <option value="eng">English</option>
            <option value="french">French</option>
            <option value="malyalam">Malyalam</option>
        </select>
        <input type="submit" value="submit" value="SET LANGUAGE">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["submit"])){
            $pref_lang=$_POST["lang"];
        }
    }
    
    ?>
</body>
</html>