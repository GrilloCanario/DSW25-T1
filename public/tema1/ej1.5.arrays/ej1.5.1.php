<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $frutas = ["Manzana", "Plátano", "Naranja", "Fresa", "Uva"];
    //- Visualización de todo el array
    echo "<div><h3>Array completo:</h3>";
    var_dump($frutas);
    echo "</div>";
    //- Imprimir 1 elemento por posición
    echo "<div><h3>Tercer elemento:</h3>";
    echo ($frutas[2]);
    echo "</div>";
    //- Añadir elemento al final de array
    echo "<div><h3>Array con 'Mango' añadido:</h3>";
    array_push($frutas, "Mango");
    var_dump($frutas);
    echo "</div>";
    //- Eliminar elemento por posición
    echo "<div><h3>Array sin 'Plátano':</h3>";
    unset($frutas[1]);
    var_dump($frutas);
    echo "</div>";
    //- Modificar elemento
    echo "<div><h3>Array final actualizado':</h3>";
    $frutas[0] = "Pera";
    var_dump($frutas);
    echo "</div>";
    ?>
</body>
</html>