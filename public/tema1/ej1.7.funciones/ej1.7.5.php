<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calcularEstadisticas($arrayNumeros) {
        $min = min($arrayNumeros);
        $max = max($arrayNumeros);
        $media = (array_sum($arrayNumeros) / count($arrayNumeros));

        return [ "menor" => $min, "mayor" => $max, "media" => $media];
    }

    $array1 = [10, 2, 7, 15, 3];
    $array2 = [1, 1, 1, 1, 1];

    echo "<h3>Array de prueba 1</h3>";
    echo "<pre>";
    print_r($array1);
    echo "</pre>";
    $resultado1 = calcularEstadisticas($array1);
    echo "<h3>Resultados</h3>";
    echo "<pre>";
    print_r($resultado1);
    echo "</pre>";

    echo "<h3>Array de prueba 2</h3>";
    echo "<pre>";
    print_r($array1);
    echo "</pre>";
    $resultado2 = calcularEstadisticas($array2);
    echo "<h3>Resultados</h3>";
    echo "<pre>";
    print_r($resultado2);
    echo "</pre>";
    ?>
</body>
</html>