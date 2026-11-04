<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <?php include_once("../includes/style.php"); ?>
</head>

<body>
    <h1 class="blue">Strings</h1>
    <a href="index.php">Home</a>
    <?php
    $name = "John Doe";
    $campus = "Moncton";
    $course = "PHP Fundamentals";
    $message = "My name is " . $name . " and i am a " . $course . " student at the NBCC " . $campus . " and i am studying php.";
    $messageStringInterpolation = "My name is $name and i am a $course student at the NBCC $campus and i am studying php.";
    ?>

    <h1>using string concetenation with the dot operator</h1>
    <h2 class="green">
        <?php echo $message; ?>
    </h2>
    <h1>using string interpolation</h1>
    <h2 class="blue">
        <?= $messageStringInterpolation ?>
    </h2>
</body>

</html>