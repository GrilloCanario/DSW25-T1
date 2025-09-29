<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($num = 2; $num <= 10; $num++){
        if ($num % 2 == 0){
            if($num == 6){
                echo "<p id='numeroCentral'>" . $num . "</p>";
                continue;
            }
            echo "<p>" . $num . "</p>";
        }
    }
    ?>
</body>
</html>