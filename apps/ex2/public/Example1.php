<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>throwing an Exceptions</title>
    <?php include_once("../includes/styles.php"); ?>
</head>

<body>
    <h1>throwing Exceptions</h1>
    <a href="/">Home</a>
    <div>
        <?php
        try {
            echo "<h2>Hello. Everything is fine.</h2>";

            throw new Exception("Something is wrong!");

            // this code will never execute.
            echo "<h2>Hello. Everything is fine.</h2>";
        } catch (Exception $e) {
            echo "Error" . $e->getMessage();
        }
        ?>
    </div>

</body>

</html>