<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function crearListaHTML($elementos, $ordenada = false) {
    // Determinar tipo de lista
    $lista = $ordenada ? "<ol>" : "<ul>";

    // Recorrer el array y crear los <li>
    foreach ($elementos as $item) {
        $lista .= "<li>$item</li>";
    }

    // Cerrar la lista
    $lista .= $ordenada ? "</ol>" : "</ul>";

    // Devolver el HTML completo
    return $lista;
    }

    // Arrays de prueba
    $numeros = [10, 5, 20, 1];
    $frutas = ["Manzana", "Pera", "Uva", "Naranja"];

    // Mostrar arrays y listas generadas
    echo "<h3>Array numérico (no ordenado):</h3>";
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";
    echo crearListaHTML($numeros); // No ordenada (ul)
    /*
    Una lista ordenada (<ol>) se usa cuando los elementos tienen un sentido secuencial o jerárquico:
        Ejemplo: pasos de una receta, posiciones en una carrera, clasificación alfabética de nombres.
    Una lista desordenada (<ul>) se usa cuando los elementos no tienen un orden específico:
        Ejemplo: colores, frutas, tareas sin prioridad.

    */
    echo "<h3>Array de strings (ordenado):</h3>";
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";
    echo crearListaHTML($frutas, true); // Ordenada (ol)
?>
</body>
</html>