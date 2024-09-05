<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="str"> Enter the String: </label>
        <input type="text" name="str" id="str" placeholder="Enter String here" required>
        <input type="submit" value="Click here to print vowels in the string">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["str"];
        $total_vowels = 0;
        $vowels = ['a', 'e', 'i', 'o', 'u'];
    
        // Convert the input string to lowercase
        $strLower = strtolower($str);
    
        // Iterate through each character
        for ($i = 0; $i < strlen($strLower); $i++) {
            if (in_array($strLower[$i], $vowels)) {
                $total_vowels++;
            }
        }
        echo "Total vowels: $total_vowels";
    }
    ?>
    
</body>
</html>