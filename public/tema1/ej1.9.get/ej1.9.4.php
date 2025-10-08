<?php
require 'datos_array.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de usuarios</title>
</head>
<body>
    <h2>Listado de usuarios</h2>
    <ul>
        <?php
        //- Recorrer el array y mostrar cada nombre como enlace
        foreach ($datos as $indice => $usuario) {
            //- Enlace que lleva al script anterior pasando el índice por URL
            echo "<li><a href='ej1.9.3.php?indice=$indice'>{$usuario['nombre']}</a></li>";
        }
        ?>
    </ul>
</body>
</html>