<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $alumno = [
        "nombre" => "Ana",
        "apellido" => "García",
        "edad" => 20,
        "curso" => "Programación Web"
    ];
    //- Visualización del array asociativo
    echo "<h2>Array completo:</h2>";
    echo "<pre>";
    print_r($alumno);
    echo "</pre>";
    //- Imprimir nombre alumno
    echo "<h2>Nombre del alumno:</h2>";
    echo "<pre>";
    print_r($alumno["nombre"]);
    echo "</pre>";
    //- añadir nueva key-value
    echo "<h2>Array con email añadido:</h2>";
    $alumno["email"] = "ana.garcia@example.com";
    echo "<pre>";
    print_r($alumno);
    echo "</pre>";
    //- Modificar value de una key
    echo "<h2>Array con edad actualizada:</h2>";
    $alumno["edad"] = 21;
    echo "<pre>";
    print_r($alumno);
    echo "</pre>";
    //- eliminar una key-value
    echo "<h2>Array con curso eliminado:</h2>";
    unset($alumno["curso"]);
    echo "<pre>";
    print_r($alumno);
    echo "</pre>";
    ?>
</body>
</html>