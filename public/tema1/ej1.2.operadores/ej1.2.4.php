<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valorA = "10";
    $valorB = 10;
    echo "<span id='comparacion EstrictaIgual'>Comparación estricta igual: " . (($valorA === $valorB) ? "true" : "false") . "</span>";
    echo "<span id='comparacion EstrictaDiferente'>Comparación estricta diferente: " . (($valorA !== $valorB) ? "true" : "false") . "</span>";
    echo "<span id='logicoAnd'>ValorA es igual a valorB y valorA es un string: " . ((($valorA == $valorB) && is_string($valorA)) ? "true" : "false") . "</span>";
    echo "<span id='logicoOr'>Valor A es un entero o valorB es un string: " . ((is_int($valorA) || is_string($valorB)) ? "true" : "false") . "</span>";

    ?>
</body>
</html>