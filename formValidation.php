<!DOCTYPE html>
<?php
$error = " ";
$msg = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];
    if (filter_var($age, FILTER_VALIDATE_INT) !== false) {
        if ($age >= 22 && $age <= 40) {
            $msg = "Your age is $age and you are eligible<br>";
        } else {
            $error = "Age must be between 22 and 40<br>";
        }
    } else {
        $error = "Age must be an integer<br>";
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
        Enter your age:
        <input type="number" name="age" placeholder="Enter age"><br>
        <span style="color:red"><?php echo $error ?></span>
        <span style="color:green"><?php echo $msg ?></span>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
