<?php
//* Comprobar si existen los parámetros 'inicio' y 'fin' y si son números enteros
if (isset($_GET['inicio'], $_GET['fin']) && is_numeric($_GET['inicio']) && is_numeric($_GET['fin'])) {
    
    //* Convertir los valores a enteros
    $inicio = (int) $_GET['inicio'];
    $fin = (int) $_GET['fin'];

    //* Generar la lista solo si inicio <= fin
    echo "<ol>";
    if ($inicio <= $fin){
        //* Si inicio es menor o igual que fin → contar hacia adelante
        for ($i = $inicio; $i <= $fin; $i++) {
        echo "<li>$i</li>";
    }
    } else {
        //* Si inicio es mayor que fin → contar hacia atrás
        for ($i = $inicio; $i >= $fin; $i--){
        echo "<li>$i</li>";
    }
    }
    
    echo "</ol>";

} else {
    //* Si faltan parámetros o no son válidos
    echo "<p>Parámetros no válidos</p>";
}
?>