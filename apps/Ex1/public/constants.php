<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
    <?php include_once("../includes/style.php"); ?>
</head>

<body>
    <h1>Constants</h1>
    <a href="/">Home</a>
    <div>
        <?php
        define("COLLEGE", "NBCC");
        define("CAMPUSES", "Moncton");
        define("MARGIN", "0.05"); //5%
        //define("CAMPUS", "FREDERICTON"); // We cannot reassign constants
        
        const TAX_RATE = 0.15; // This is another way to define constants
        const MAX_STUDENTS = 30;
        const ADDRESS = "1234 Mountain Rd";
        ?>
    </div>
    <h1>I am studying at: <?= COLLEGE ?> <?= CAMPUSES ?></h1>
    <div>
        Tax Rate: <?= TAX_RATE ?><br>
        Maximum Students: <?= MAX_STUDENTS ?><br>
        Address: <?= ADDRESS ?><br>
        Margin: <?= MARGIN ?>
    </div>
</body>

</html>