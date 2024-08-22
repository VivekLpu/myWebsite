<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temperature Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Temperature Converter</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <form action="" method="post">
            <label for="temp">Enter the Temperature (In Celcius): </label>
            <input type="number" name="temp" id="temp" required>
            <br><br>

            

            <button type="submit" class="btn btn-primary" name="operation" value="ConverttoF"> ConvertF </button>
            <button type="submit" class="btn btn-primary" name="operation" value="ConverttoC"> ConvertC </button>

    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['temp'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'ConverttoF':
                $result = (9/5)*$n1 + 32;   
                break;

            case 'ConverttoC':
                $result = ($n1 - 32) * 5/9;
                break;
            
            default:
                $result = "Invalid operation";
        }
        echo "<h4>Temperature in Farenheit: $result</h4>";
      }
  
    ?>


  </body>
</html>