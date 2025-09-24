<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $producto = "Teclado Gaming";
    $precio = 75.99;
    $configuracion = ['tema'=>'oscuro','idioma'=>'es'];
    echo "<ul><li>";
    var_dump($producto);
    echo "</li>";
    echo "<li>";
    var_dump($precio);
    echo "</li>";
    echo "<li>";
    var_dump($configuracion);
    echo "</li></ul>";
    ?>
</body>
</html>