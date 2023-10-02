<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Operator Types</title>
</head>
<body>

    <h1>Operator Examples</h1>
    
    <div class="container">
        <h2>Ex: </h2>
        <?php
        $a = 42;
        $b = 20;
        
        echo "Step 1: Assigning the value of 42 to variable \$a<br>";
        echo "Step 2: Assigning the value of 20 to variable \$b<br>";
        
        $c = $a + $b;
        echo "<br>Step 3: Addition Operation: \$c = \$a + \$b<br>";
        echo "Addition Operation Result: $c <br/>";
        
        $c = $a - $b;
        echo "<br>Step 4: Subtraction Operation: \$c = \$a - \$b<br>";
        echo "Subtraction Operation Result: $c <br/>";
        
        $c = $a * $b;
        echo "<br>Step 5: Multiplication Operation: \$c = \$a * \$b<br>";
        echo "Multiplication Operation Result: $c <br/>";
        
        $c = $a / $b;
        echo "<br>Step 6: Division Operation: \$c = \$a / \$b<br>";
        echo "Division Operation Result: $c <br/>";
        
        $c = $a % $b;
        echo "<br>Step 7: Modulus Operation: \$c = \$a % \$b<br>";
        echo "Modulus Operation Result: $c <br/>";
        
        $c = $a++;
        echo "<br>Step 8: Increment Operation: \$c = \$a++<br>";
        echo "Increment Operation Result: $c <br/>";
        
        $c = $a--;
        echo "<br>Step 9: Decrement Operation: \$c = \$a--<br>";
        echo "Decrement Operation Result: $c <br/>";
        ?>
    </div>
    
</body>
</html>