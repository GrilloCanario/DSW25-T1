<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $colores = ["Rojo","Verde","Azul","Amarillo","Naranja"];

    //- Visualizar Array
    echo "<div><h3>Array original.</h3><pre>";
    print_r($colores);                                  //* array_splice($array,pos de inicio, longitud, valor a reemplazar)
    echo "</pre></div>";
    //- Eliminar elemento
    echo "<div><h3>Array después de eliminar 'Azul':</h3><pre>";
    $subArray = array_splice($colores,2,1);
    print_r($colores);
    echo "</pre></div>";
    //- Añadir elementos en una posición especifica
    echo "<div><h3>Array después de insertar 'Violeta' y 'Blanco': </h3><pre>";
    array_splice($colores,2,0,["Violeta","Blanco"]);        //* Inserta sin eliminar , el 0 es para eso
    print_r($colores);
    echo "</pre></div>";
    //- Modificar elementos
    echo "<div><h3>Array después de reemplazar desde 'Verde' hasta 'Amarillo' por 'Marrón':</h3><pre>";
    array_splice($colores,1,4,["Marrón"]);      //* Elimina desde Verde a Amarillo y pone Marrón
    print_r($colores);
    echo "</pre></div>";
    ?>
</body>
</html>