<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <div class="container_one">
        <?php
        echo "<h1>Odd or Even number Checker</h1>";
            $number = rand(1, 100);
            // $number = (int)readline('Enter an integer: '); // Replace 10 with the number you want to check
            // echo $number;
            

            if ($number % 2 == 0) {
                echo "<h1>$number is an even number!</h2>";
            } else {
                echo "<h1>$number is an odd number!</h2>";
            }
        ?>
    </div>
</div>
</body>
</html>