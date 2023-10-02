<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Constants</title>
</head>
<body>
<h1>Constants PHP</h1>

    <div class="container">
        <h2>Constant () Examples</h2>
        <?php
       define("MINSIZE", 50);
       echo MINSIZE."<br>";
       echo constant("MINSIZE"); // same thing as the previous line
        ?>
    </div>
    <div class="container">
    <h2>Valid and Invalid Constant Names</h2>
    <?php
        // Valid constant names
        define("ONE", "first thing");
        define("TWO2", "second thing");
        define("THREE_3", "third thing");
        
        // Invalid constant names (modified)
        define("TWO2_INVALID", "second thing");
        define("THREE_INVALID", "third value");

        // Display the constants
        echo "Valid Constants:<br>";
        echo "ONE: " . ONE . "<br>";
        echo "TWO2: " . TWO2 . "<br>";
        echo "THREE_3: " . THREE_3 . "<br><br>";

        echo "Invalid Constants:<br>";
        echo "TWO2_INVALID: " . TWO2_INVALID . "<br>";
        echo "THREE_INVALID: " . THREE_INVALID . "<br>";
    ?>
</div>
</body>
</html>