<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ciudades = ["Madrid","Barcelona","Sevilla","Valencia","Bilbao"];

    //- Visualizar número de elementos del array
    echo "<div>Número de elementos: " . count($ciudades) . "</div>";
    //- Eliminar ultimo elemento
    echo "<div>Array después de eliminar el último elemento:";
    echo "<pre>";
    array_pop($ciudades);
    print_r ($ciudades);
    echo "</pre>";
    echo "</div>";
    //- Añadir elemento al final
    echo "<div>Array después de añadir 'Zaragoza' al final:";
    echo "<pre>";
    array_push($ciudades, "Zaragoza");
    print_r ($ciudades);
    echo "</pre>";
    echo "</div>";
    //- Eliminar primer elemento
    echo "<div>Array después de eliminar el primer elemento:";
    echo "<pre>";
    array_shift($ciudades);
    print_r ($ciudades);
    echo "</div>";
    //- Añadir elemento al inicio
    echo "<div>Array después de añadir 'Málaga' al principio";
    echo "<pre>";
    array_unshift($ciudades, "Málaga");
    print_r ($ciudades);
    echo "</pre>";
    echo "</div>";
    ?>
</body>
</html>