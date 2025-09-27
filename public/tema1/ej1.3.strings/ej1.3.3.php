<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $textoOriginal = "El perro corre por el parque y el perro ladra.";

    echo "<p>La longitud original del texto es: <span id='longitudOriginal'>" . strlen($textoOriginal) ."</span></p>";
    echo "<p id='textoReemplazado'>" . str_replace("perro", "gato", $textoOriginal) ."</p>";
    
    ?>
</body>
</html>