<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>throwing Exceptions is a function</title>
    <?php include_once("../includes/styles.php"); ?>
</head>

<body>
    <h1>throwing Exceptions is a function</h1>
    <a href="/">Home</a>
    <div>
        <?php
        function divide($a, $b)
        {
            if ($b == 0) {
                throw new InvalidArgumentException("Cannot divide by zero");
            }

            return $a / $b;
        }

        try {
            echo divide(10, 2);
        } catch (InvalidArgumentException $e) {
            echo "Error: " . $ex->getMessage();

        }
        ?>
    </div>

</body>

</html>