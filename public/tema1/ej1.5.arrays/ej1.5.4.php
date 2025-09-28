<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $animales = ["Perro","Gato","Pájaro","Hamster","Pez","Serpiente","Tortuga"];

    //- Visualización del array
    echo "<div><h2>Array completo:</h2><pre>";
    print_r($animales);
    echo "</pre></div>";
    //- Extraer elementos por posición y mostrar sub-array
    echo "<div><h2>Sub-array desde la posición 2 hasta la 4:</h2><pre>";
    print_r(array_slice($animales,2,3));
    echo "</pre></div>";
    //- Extraer ultimos elementos y mostrar sub-array
    echo "<div><h2>Últimos 3 elementos:</h2><pre>";
    print_r(array_slice($animales, -3));
    echo "</pre></div>";
    //- Extraer elementos por posicioón manteniendo claves numericas originales y mostrar sub-array
    echo "<div><h2>2 elementos desde la posición 1(manteniendo claves):</h2><pre>";
    print_r(array_slice($animales,1,2,true));       //* array_slice($array,pos inicial, longitud, preservar keys (true-> se guardan))
    echo "</pre></div>";
    ?>
</body>
</html>