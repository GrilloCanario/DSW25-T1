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

    //- Creación de una tabla con los datos del array asociativo
    echo "<table><tr><th>Producto</th><th>Precio</th></tr>";
    //* echo "<tr><td>hola</td><td>mundo</td></tr>";
    foreach ($productos as $key => $value) {
        printf("<tr><td>%s</td><td>%.2f€</td></tr>",$key,$value);
    }
    echo "</table>";
    ?>
</body>
</html>