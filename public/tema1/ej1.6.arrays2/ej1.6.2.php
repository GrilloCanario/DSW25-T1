<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $productos = [
        "manzana" => 1.5,
        "plátano" => 0.75,
        "naranja" => 1.2,
        "fresa" => 2
    ];

    //- Visualizar el array  asociativo
    echo "<div><pre>";
    print_r($productos);
    echo "</div></pre>";
    //- Añadir key + value
    echo "<div><pre>";
    $productos["aguacate"] = "5.99";
    print_r($productos);
    echo "</div></pre>";
    //- Modificar el value de una key
    echo "<div><pre>";
    $productos["plátano"] = "1.75";
    print_r($productos);
    echo "</div></pre>";
    //- Uso de foreach para mostrar listado no ordenado con salida predefinida
    echo "<div><pre><ul>";

    foreach($productos as $key => $value) {
        printf ("<li>%s: %.2f€</li>",$key,$value);
    }
    echo "</ul></pre></div>";
    ?>
</body>
</html>