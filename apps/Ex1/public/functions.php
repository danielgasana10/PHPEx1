!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <?php include_once("../includes/style.php"); ?>
</head>

<body>
    <h1>Functions</h1>
    <a href="/">Home</a>

    <?php
    /**
     * Summary of add
     * @param int|float $x value 1
     * @param int|float $y value 2
     * @return float|int the sum of the two values
     */
    function add(int|float $x, int|float $y): int|float
    {
        return $x + $y;
    }
    // Subtract function
    function subtract(int|float $x, int|float $y): int|float
    {
        return $x - $y;
    }
    // Multiply function
    function multiply(int|float $x, int|float $y): int|float
    {
        return $x * $y;
    }
    // Divide function
    function divide(int|float $x, int|float $y): int|float
    {
        return $x / $y;
    }
    //modulus function
    function modulus(int|float $x, int|float $y): int|float
    {
        return $x % $y;
    }
    ?>
    <div>
        13 + 5 = <?= add(13, 5) ?> <br>
        13 - 5 = <?= subtract(13, 5) ?> <br>
        13 * 5 = <?= multiply(13, 5) ?> <br>
        13 / 0 = throws an Exception
        <?php
        // Divison by zero throws an error
        echo divide(13, 0) ?> <br>
        13 % 5 = <?= modulus(13, 5) ?> <br>
    </div>
</body>

</html>