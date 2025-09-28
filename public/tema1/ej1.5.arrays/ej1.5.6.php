<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cadenasFrutas = "Manzana,Plátano,Naranja,Fresa,Uva";
    //- Visualizar el Array
    echo "<div><h3>Cadena original:</h3><pre>";
    print_r($cadenasFrutas);
    echo "</pre></div>";
    //- Convertir cadena -> array con explode
    echo "<div><h3>Array resultante de explode:</h3><pre>";
    $arrayFrutas = explode(",",$cadenasFrutas);
    print_r($arrayFrutas);
    echo "</pre></div>";
    //- Convertir array -> cadena con implode
    echo "<div><h3>Nueva cadena con implode:</h3><pre>";
    $nuevaCadenaFrutas = implode("-",$arrayFrutas);
    print_r($nuevaCadenaFrutas);
    echo "</pre></div>";
    //- Modificar array usando implode
    echo "<div><h3>Cadena final con array modificado:</h3><pre>";
    array_splice($arrayFrutas,1,1);
    array_splice($arrayFrutas,2,1);
    $nuevoArrayFrutas = implode(" / ",$arrayFrutas);
    print_r($nuevoArrayFrutas);
    echo "</pre></div>";
    ?>
</body>
</html>