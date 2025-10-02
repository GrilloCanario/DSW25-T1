<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numerosMultidimensional = [];
    $count = 1;
    echo "<table><tr><caption><strong>Tabla HTML:</strong></caption</tr></tbody>";
    for($i = 0; $i < 16 ; $i++){
        for($j = 0; $j < 10; $j++){
            print_r("<pre>" . $numerosMultidimensional[$i][$j] = $count . "</pre>");
            $count++;
        }
    }
    echo "</tbody></table>";
    ?>
</body>
</html>