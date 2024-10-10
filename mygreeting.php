<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings</title>
</head>
<body>
    <?php
    if (isset($_COOKIE["preflang"])) {
        $user_lang = $_COOKIE["preflang"];
        
        if ($user_lang == "eng") {
            echo "Welcome!!";
        } elseif ($user_lang == "french") {
            echo "Bonjour!!";
        } elseif ($user_lang == "malayalam") {
            echo "Namaste!!";
        }
    } else {
        echo "No language preference set!";
    }
    ?>
</body>
</html>

