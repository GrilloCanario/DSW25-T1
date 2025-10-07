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
    for($i = 0; $i < 16 ; $i++){        //* filas   (1º siempre van las filas)
        for($j = 0; $j < 10; $j++){     //* columnas
            $numerosMultidimensional[$i][$j] = $count;
            $count++;
        }
    }
    echo "<div>";
    echo "<h3>Array multidimensional contruido:</h3>";
    echo "<pre>";
    print_r($numerosMultidimensional);
    echo "</pre>";
    echo "</div>";

    echo "<div>";
    echo "<h3>Tabla HTML:</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tbody>";
    
    for ($i = 0; $i < 16 ; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 10; $j++){
            echo "<td>" . $numerosMultidimensional[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    ?>
</body>
</html>