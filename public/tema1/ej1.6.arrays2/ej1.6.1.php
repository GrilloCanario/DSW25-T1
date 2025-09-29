<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numeros = [10,20,30,40,50];
    //- Visualizar el array
    echo "<div>Array construido:<pre>";
    print_r($numeros);
    echo "</pre></div>";
    //- Mostrar array en listado ordenado con for
    echo "<div>Elementos en un listado ordenado:<pre><ol>";
    $countNumeros = count($numeros);
    for ($i = 0; $i < $countNumeros; $i++) {
        echo "<li>" . $numeros[$i] . "</li>";
    }
    echo "</ol></pre></div>";
    //- Añadir elemento al final del array y visualizarlo
    //- Modificar elementos del array con operación aritmetica
    ?>
</body>
</html>