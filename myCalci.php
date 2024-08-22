<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>My Mini Calculator</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <form action="" method="post">
            <label for="firstnum">Enter 1st number: </label>
            <input type="number" name="firstnum" id="num1" required>
            <br><br>

            <label for="secondnum">Enter 2nd number: </label>
            <input type="number" name="secondnum" id="num2" required>

            <!-- <input type="submit" value="+"> -->
            <button type="submit" class="btn btn-primary" name="operation" value="+"> + </button>
            <button type="submit" class="btn btn-primary" name="operation" value="-"> - </button>
            <button type="submit" class="btn btn-primary" name="operation" value="*"> * </button>
            <button type="submit" class="btn btn-primary" name="operation" value="/"> / </button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['firstnum'];
        $n2 = $_POST['secondnum'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case '+':
                $result = $n1 + $n2;
                break;
            case '-':
                $result = $n1 - $n2;
                break;
            case '*':
                $result = $n1 * $n2;
                break;
            case '/':
                $result = $n1 / $n2;
                break;  
            default:
                $result = "Invalid operation";
        }
        echo "<h4>Result: $result</h4>";
      }
  
    ?>


  </body>
</html>