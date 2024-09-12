<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Choose a page to display </h1>

    <form action="" method="get">
        <label for="page">Select a page: </label>
        <select name="page" id="page">
            <option value="foot">foot</option>
            <option value="head">head</option>
            <option value="header">header</option>
        </select>
        <button type="submit">Submit</button>
    </form>

    <div>
        <?php
        if ($page){
            $page = isset($GET['page']) ? $GET ['page'] : null;

            if($page){
                $file = $page. ".php";
            }
            if(file_exists($file)){
                include($file);
            }else{
                echo "<p>Sorry, the page you requested does not exist.</p>";
            }
        }
        ?>
    </div>
</body>
</html>