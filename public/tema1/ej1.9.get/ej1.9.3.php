<?php
require 'datos_array.php'; //* Cargamos el array con los datos

//* Comprobar si el parámetro 'indice' está presente y es un número entero
if (isset($_GET['indice']) && is_numeric($_GET['indice'])) {
    $indice = (int) $_GET['indice']; //* Convertimos a entero

    echo "<p><h3>Has seleccionado el índice: $indice</h3></p>";

    //* Validar si el índice está dentro del rango del array
    if ($indice >= 0 && $indice < count($datos)) {
        echo "<pre>";
        print_r($datos[$indice]);
        echo "</pre>";
    } else {
        echo "<p>Índice no válido. Debe ser entre 0 y " . (count($datos) - 1) . "</p>";
    }

} else {
    //* Si el parámetro no existe o no es numérico
    echo "<p>Parámetro 'indice' no válido o no proporcionado</p>";
}
?>