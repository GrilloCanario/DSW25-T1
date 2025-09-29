<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor_float = 99.99;
    $valor_int = (int)$valor_float;
    echo "<div id='entero1'>";
    var_dump($valor_int);
    echo "</div>";

    $valor_string_num = "50";
    $valor_int_desde_string = (int)$valor_string_num;
    echo "<div id='entero2'>";
    var_dump($valor_int_desde_string);
    echo "</div>";

    $valor_cero = 0;
    $valor_bool_desde_cero = (bool)$valor_cero;
    echo "<div id='booleano'>";
    var_dump($valor_bool_desde_cero);
    echo "</div>";
    ?>
</body>
</html>