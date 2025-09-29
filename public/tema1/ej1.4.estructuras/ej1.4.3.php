<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $puntuacion = 75;
    if ($puntuacion >= 90){
        $calificacion = "Excelente";
    }elseif ($puntuacion >= 70 && $puntuacion < 90){
        $calificacion = "Bueno";
    }else {
        $calificacion = "Necesita mejorar";
    }
    echo "<p id ='resultadoCalificacion'>" . $calificacion . "</p>";
    ?>
</body>
</html>